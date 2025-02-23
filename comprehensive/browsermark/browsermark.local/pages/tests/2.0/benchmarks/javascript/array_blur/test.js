/**
 * Javascript Array Blur
 *
 * Array Blur test will create bitmap and start to blur bitmap pixels. After each blur counter is increased by one.
 *
 * Test is  mainly imported from old Browsermark.
 *
 * To determine internal score, script will use operations/second (ops): counter / elapsed time in milliseconds x 1000
 * Final score is calculated with formula 1000 x (ops / compare).
 *
 * @version 2.0
 * @author Jouni Tuovinen <jouni.tuovinen@rightware.com>
 * @copyright 2012 Rightware
 **/

// Default guide for benchmark.js
var guide = {
    isDoable : true, // test is always doable
    operations : null,
    time : 4000,
    internalCounter : false,
    testName : 'Javascript Array Blur',
    testVersion : '2.0',
    compareScore : 14.9,
    isConformity : 0 // Not false but zero because this value is sent through POST which stringify values
};

var test = {
    b: null,
    data: [
    122,128,160,255,121,127,159,255,121,127,
    159,255,123,129,161,255,124,130,162,255,
    124,130,162,255,125,131,165,255,127,133,
    167,255,128,134,168,255,126,132,166,255,
    125,131,165,255,127,133,167,255,129,135,
    171,255,128,134,170,255,127,133,169,255,
    127,133,167,255,127,133,167,255,127,133,
    165,255,127,133,165,255,127,133,165,255,
    127,133,165,255,127,133,165,255,127,134,
    163,255,127,134,163,255,126,131,161,255,

    129,134,164,255,127,130,161,255,127,130,
    161,255,135,134,166,255,132,131,163,255,
    129,128,160,255,133,133,167,255,126,130,
    165,255,125,131,167,255,126,130,165,255,
    124,128,163,255,124,127,160,255,124,127,
    160,255,126,130,165,255,127,133,167,255,
    138,143,181,255,137,145,182,255,132,140,
    179,255,124,132,169,255,123,128,166,255,
    127,133,167,255,129,132,167,255,125,130,
    160,255,122,129,155,255,123,134,156,255,

    126,133,159,255,124,131,157,255,124,129,
    158,255,126,131,160,255,128,132,161,255,
    128,132,161,255,126,130,159,255,126,130,
    159,255,124,130,156,255,124,130,156,255,
    124,130,154,255,125,131,155,255,123,131,
    152,255,123,131,154,255,123,130,159,255,
    123,129,161,255,124,128,163,255,124,128,
    163,255,125,127,166,255,125,127,166,255,
    125,127,168,255,125,127,168,255,127,129,
    168,255,126,128,166,255,124,128,165,255,

    122,128,160,255,122,128,160,255,121,130,
    159,255,122,132,159,255,122,131,160,255,
    121,130,161,255,121,130,163,255,121,130,
    163,255,120,129,162,255,121,127,161,255,
    120,126,160,255,119,125,159,255,119,125,
    159,255,122,128,162,255,122,128,162,255,
    121,127,161,255,120,126,160,255,118,122,
    157,255,117,121,156,255,117,121,156,255,
    118,122,157,255,114,118,155,255,114,118,
    155,255,115,119,156,255,115,119,156,255,

    121,127,159,255,120,126,158,255,121,127,
    159,255,123,129,161,255,124,130,162,255,
    124,130,162,255,125,131,165,255,127,133,
    167,255,126,132,166,255,123,129,163,255,
    122,128,162,255,124,130,164,255,125,131,
    167,255,124,130,166,255,122,128,164,255,
    122,128,164,255,123,129,163,255,123,129,
    161,255,123,129,161,255,123,129,161,255,
    123,129,161,255,124,130,162,255,124,131,
    160,255,124,131,160,255,128,133,163,255

    ],

    init : function()
    {
        // Save test but not asynchronous, before continue test must be saved to prevent mismatch error
        $.ajax(
        {
            url: '/ajax/set_test',
            async: false,
            type: 'POST',
            data:
            {
                test_name: guide.testName,
                test_version: guide.testVersion
            }
        });

        this.b = new Bitmap(this.data, 100, 53);

        return guide;

    },
    run : function(isFinal, loopCount)
    {
        this.b.blur(2);
        if (isFinal)
        {
            var elapsed = benchmark.elapsedTime();
            var finalScore = counter / elapsed * 1000;
            benchmark.submitResult(finalScore, guide, {elapsedTime: elapsed, operations: counter, ops: finalScore});
        }
    }
};

function Bitmap(data, width, height)
{

    this.data = data;
    this.width = width;
    this.height = height;

    this.set = set;
    this.get = get;
    this.blur = blur;
    this.applyConvolutionMatrix = applyConvolutionMatrix;

    /**
     * Get pixel.
     */
    function get(x, y)
    {

        if (typeof(this.data[4 * (y * this.width + x) + 0]) == "undefined"
            || typeof(this.data[4 * (y * this.width + x) + 1]) == "undefined"
            || typeof(this.data[4 * (y * this.width + x) + 2]) == "undefined"
            || typeof(this.data[4 * (y * this.width + x) + 3]) == "undefined")
        {
            return [0, 0, 0, 0];
        }

        return [
            this.data[4 * (y * this.width + x) + 0],
            this.data[4 * (y * this.width + x) + 1],
            this.data[4 * (y * this.width + x) + 2],
            this.data[4 * (y * this.width + x) + 3]
        ];
    }

    function set(x, y, pixel, data)
    {

        var newData;

        if (typeof(data) == "undefined")
        {
            newData = this.data;
        } else {
            newData = data;
        }

        newData[4 * (y * this.width + x) + 0] = pixel[0];
        newData[4 * (y * this.width + x) + 1] = pixel[1];
        newData[4 * (y * this.width + x) + 2] = pixel[2];
        newData[4 * (y * this.width + x) + 3] = pixel[3];

        if (typeof(data) == "undefined")
        {
            this.data = newData;
        }

        return newData;

    }

    function blur(amount)
    {

        for (var i = 0; i < amount; i++)
        {
            this.applyConvolutionMatrix([1, 1, 1, 1, 1, 1, 1, 1, 1]);
        }

    }

    /**
     *
     */
    function applyConvolutionMatrix(matrix)
    {

        if (typeof(matrix) != "object")
        {
            console.log(typeof(matrix));
            return;
        }

        if (matrix.length == 6)
        {
            console.log("Invalid matrix.");
            console.log(matrix);
            return;
        }

        // Copy data.
        var newData = this.data;

        for (var x = 0; x < this.width; x++)
        {
            for (var y = 0; y < this.height; y++)
            {

                // Get neighbor pixels.
                var pixels = [
                    this.get(x - 1, y - 1),
                    this.get(x + 0, y - 1),
                    this.get(x + 1, y - 1),
                    this.get(x - 1, y + 0),
                    this.get(x + 0, y + 0),
                    this.get(x + 1, y + 0),
                    this.get(x - 1, y + 1),
                    this.get(x + 0, y + 1),
                    this.get(x + 1, y + 1)
                ];

                // Create new pixel.
                var newPixel = [0, 0, 0, 255];

                // Apply matrix.
                for (var i = 0; i < 3; i++)
                {
                    for (var k = 0; k < 6; k++)
                    {
                        newPixel[i] = newPixel[i] + matrix[k] * pixels[k][i];
                    }
                    newPixel[i] = newPixel[i] / 6;

                    // Check values.
                    if (newPixel[i] < 0) newPixel[i] = 0;
                    if (newPixel[i] > 255) newPixel[i] = 255;

                }

                // Set new pixel.
                newData = this.set(x, y, newPixel, newData);
            }
        }

        this.data = newData;

    }

}