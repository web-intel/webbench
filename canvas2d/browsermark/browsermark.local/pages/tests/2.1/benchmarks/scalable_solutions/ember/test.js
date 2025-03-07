/**
 * Scalable Solutions Ember
 *
 * Scalable Solutions Ember test will use Javascript framework called Ember, to perform a basic task.
 *
 * To determine internal score, script will use operations/second (ops): counter / elapsed time in milliseconds x 1000
 * Final score is calculated with formula 1000 x (ops / compare).
 *
 @version 2.1
 * @author Jouni Tuovinen <jouni.tuovinen@rightware.com>
 * @copyright 2012 Rightware
 **/

// Default guide for benchmark.js
var guide = {
    isDoable : true, // Always doable
    operations : 1000,
    time : null,
    internalCounter : false,
    testName : 'Scalable Solutions Ember',
    testVersion : '2.1',
    compareScore : 6172.9, // Compare score
    isConformity : 0 // Not false but zero because this value is sent through POST which stringify values
};

var test = {
    init : function()
    {
        // Delete angular content
        $('#angularApp').remove();

        // Ember init
        Benchmark = Ember.Application.create({
            rootElement: $('#emberApp')
        });
        Benchmark.data = Ember.A();

        pushEmberData = function (data) {
            Benchmark.data.pushObject(data);
        };
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

        return guide;
    },
    run : function(isFinal, loopCount)
    {
        // Push Ember data
        pushEmberData(loopCount + ', ');

        // If final, calculate score
        if (isFinal)
        {
            var elapsed = benchmark.elapsedTime();

            // Final push to Ember
            pushEmberData('FINISHED');

            var finalScore = counter / elapsed * 1000;
            benchmark.submitResult(finalScore, guide, {elapsedTime: elapsed, operations: counter, ops: finalScore});
        }
    }
};