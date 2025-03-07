                        <div id="ajax-loader"><img src="/images/running.gif" alt=""></div>
<div id="hidden_playground_4" style="display: none">
        <!-- content from: http://en.wikipedia.org/wiki/Benchmark_(computing)
             revision: http://en.wikipedia.org/w/index.php?title=Benchmark_(computing)&oldid=489623550
             license: Text is available under the Creative Commons Attribution-ShareAlike License; additional terms may apply. See Terms of use for details.
        -->
<table class="metadata plainlinks ambox ambox-content ambox-Refimprove" style="">
<tr>
<td class="mbox-image">
<div style="width: 52px;"></div>
</td>
<td class="mbox-text" style="">This article <b>needs additional <a href="/wiki/Wikipedia:Citing_sources#Inline_citations" title="Wikipedia:Citing sources">citations</a> for <a href="/wiki/Wikipedia:Verifiability" title="Wikipedia:Verifiability">verification</a></b>. Please help <a class="external text" href="//en.wikipedia.org/w/index.php?title=Benchmark_(computing)&amp;action=edit">improve this article</a> by adding citations to <a href="/wiki/Wikipedia:Identifying_reliable_sources" title="Wikipedia:Identifying reliable sources">reliable sources</a>. Unsourced material may be <a href="/wiki/Template:Citation_needed" title="Template:Citation needed">challenged</a> and <a href="/wiki/Wikipedia:Verifiability#Burden_of_evidence" title="Wikipedia:Verifiability">removed</a>. <small><i>(October 2010)</i></small></td>
</tr>
</table>
<dl>
<dd><i>This article is about the use of benchmarks in computing, for other uses see <a href="/wiki/Benchmark" title="Benchmark">benchmark</a></i>.</dd>
</dl>
<p>In <a href="/wiki/Computing" title="Computing">computing</a>, a <b>benchmark</b> is the act of running a <a href="/wiki/Computer_program" title="Computer program">computer program</a>, a set of programs, or other operations, in order to assess the relative <b>performance</b> of an object, normally by running a number of standard tests and trials against it. The term 'benchmark' is also mostly utilized for the purposes of elaborately-designed benchmarking programs themselves.</p>
<p>Benchmarking is usually associated with assessing performance characteristics of computer hardware, for example, the floating point operation performance of a <a href="/wiki/Central_processing_unit" title="Central processing unit">CPU</a>, but there are circumstances when the technique is also applicable to software. Software benchmarks are, for example, run against <a href="/wiki/Compiler" title="Compiler">compilers</a> or <a href="/wiki/Database_management_system" title="Database management system">database management systems</a>.</p>
<p>Benchmarks provide a method of comparing the performance of various subsystems across different chip/system architectures.</p>
<p><a href="/wiki/Test_suite" title="Test suite">Test suites</a> are a type of system intended to assess the <b>correctness</b> of software.</p>
<table id="toc" class="toc">
<tr>
<td>
<div id="toctitle">
<h2>Contents</h2>
</div>
<ul>
<li class="toclevel-1 tocsection-1"><a href="#Purpose"><span class="tocnumber">1</span> <span class="toctext">Purpose</span></a></li>
<li class="toclevel-1 tocsection-2"><a href="#Challenges"><span class="tocnumber">2</span> <span class="toctext">Challenges</span></a></li>
<li class="toclevel-1 tocsection-3"><a href="#Types_of_benchmarks"><span class="tocnumber">3</span> <span class="toctext">Types of benchmarks</span></a></li>
<li class="toclevel-1 tocsection-4"><a href="#Common_benchmarks"><span class="tocnumber">4</span> <span class="toctext">Common benchmarks</span></a>
<ul>
<li class="toclevel-2 tocsection-5"><a href="#Industry_standard_.28audited_and_verifiable.29"><span class="tocnumber">4.1</span> <span class="toctext">Industry standard (audited and verifiable)</span></a></li>
<li class="toclevel-2 tocsection-6"><a href="#Open_source_benchmarks"><span class="tocnumber">4.2</span> <span class="toctext">Open source benchmarks</span></a></li>
<li class="toclevel-2 tocsection-7"><a href="#Microsoft_Windows_benchmarks"><span class="tocnumber">4.3</span> <span class="toctext">Microsoft Windows benchmarks</span></a></li>
<li class="toclevel-2 tocsection-8"><a href="#Others"><span class="tocnumber">4.4</span> <span class="toctext">Others</span></a></li>
</ul>
</li>
<li class="toclevel-1 tocsection-9"><a href="#See_also"><span class="tocnumber">5</span> <span class="toctext">See also</span></a></li>
<li class="toclevel-1 tocsection-10"><a href="#References"><span class="tocnumber">6</span> <span class="toctext">References</span></a></li>
<li class="toclevel-1 tocsection-11"><a href="#Further_reading"><span class="tocnumber">7</span> <span class="toctext">Further reading</span></a></li>
<li class="toclevel-1 tocsection-12"><a href="#External_links"><span class="tocnumber">8</span> <span class="toctext">External links</span></a></li>
</ul>
</td>
</tr>
</table>
<h2><span class="editsection">[<a href="/w/index.php?title=Benchmark_(computing)&amp;action=edit&amp;section=1" title="Edit section: Purpose">edit</a>]</span> <span class="mw-headline" id="Purpose">Purpose</span></h2>
<p>As <a href="/wiki/Computer_architecture" title="Computer architecture">computer architecture</a> advanced, it became more difficult to compare the performance of various computer systems simply by looking at their specifications. Therefore, tests were developed that allowed comparison of different architectures. For example, <a href="/wiki/Pentium_4" title="Pentium 4">Pentium 4</a> processors generally operate at a higher clock frequency than <a href="/wiki/Athlon_XP" title="Athlon XP" class="mw-redirect">Athlon XP</a> processors, which does not necessarily translate to more computational power. A slower processor, with regard to clock frequency, can perform as well as a processor operating at a higher frequency. See <a href="/wiki/BogoMips" title="BogoMips">BogoMips</a> and the <a href="/wiki/Megahertz_myth" title="Megahertz myth">megahertz myth</a>.</p>
<p>Benchmarks are designed to mimic a particular type of workload on a component or system. Synthetic benchmarks do this by specially created programs that impose the workload on the component. Application benchmarks run real-world programs on the system. Whilst application benchmarks usually give a much better measure of real-world performance on a given system, synthetic benchmarks are useful for testing individual components, like a <a href="/wiki/Hard_disk" title="Hard disk" class="mw-redirect">hard disk</a> or networking device.</p>
<p>Benchmarks are particularly important in <a href="/wiki/CPU_design" title="CPU design">CPU design</a>, giving processor architects the ability to measure and make tradeoffs in <a href="/wiki/Microarchitecture" title="Microarchitecture">microarchitectural</a> decisions. For example, if a benchmark extracts the key <a href="/wiki/Algorithms" title="Algorithms" class="mw-redirect">algorithms</a> of an application, it will contain the performance-sensitive aspects of that application. Running this much smaller snippet on a cycle-accurate simulator can give clues on how to improve performance.</p>
<p>Prior to 2000, computer and microprocessor architects used <a href="/wiki/SPEC" title="SPEC" class="mw-redirect">SPEC</a> to do this, although SPEC's Unix-based benchmarks were quite lengthy and thus unwieldy to use intact.</p>
<p>Computer manufacturers are known to configure their systems to give unrealistically high performance on benchmark tests that are not replicated in real usage. For instance, during the 1980s some compilers could detect a specific mathematical operation used in a well-known floating-point benchmark and replace the operation with a faster mathematically-equivalent operation. However, such a transformation was rarely useful outside the benchmark until the mid-1990s, when <a href="/wiki/RISC" title="RISC" class="mw-redirect">RISC</a> and <a href="/wiki/VLIW" title="VLIW" class="mw-redirect">VLIW</a> architectures emphasized the importance of <a href="/wiki/Compiler" title="Compiler">compiler</a> technology as it related to performance. Benchmarks are now regularly used by <a href="/wiki/Compiler" title="Compiler">compiler</a> companies to improve not only their own benchmark scores, but real application performance.</p>
<p>CPUs that have many execution units — such as a <a href="/wiki/Superscalar" title="Superscalar">superscalar</a> CPU, a <a href="/wiki/VLIW" title="VLIW" class="mw-redirect">VLIW</a> CPU, or a <a href="/wiki/Reconfigurable_computing" title="Reconfigurable computing">reconfigurable computing</a> CPU — typically have slower clock rates than a sequential CPU with one or two execution units when built from transistors that are just as fast. Nevertheless, CPUs with many execution units often complete real-world and benchmark tasks in less time than the supposedly faster high-clock-rate CPU.</p>
<p>Given the large number of benchmarks available, a manufacturer can usually find at least one benchmark that shows its system will outperform another system; the other systems can be shown to excel with a different benchmark.</p>
<p>Manufacturers commonly report only those benchmarks (or aspects of benchmarks) that show their products in the best light. They also have been known to mis-represent the significance of benchmarks, again to show their products in the best possible light. Taken together, these practices are called <i>bench-marketing.</i></p>
<p>Ideally benchmarks should only substitute for real applications if the application is unavailable, or too difficult or costly to port to a specific processor or computer system. If performance is critical, the only benchmark that matters is the target environment's application suite.</p>
<h2><span class="editsection">[<a href="/w/index.php?title=Benchmark_(computing)&amp;action=edit&amp;section=2" title="Edit section: Challenges">edit</a>]</span> <span class="mw-headline" id="Challenges">Challenges</span></h2>
<p>Benchmarking is not easy and often involves several iterative rounds in order to arrive at predictable, useful conclusions. Interpretation of benchmarking data is also extraordinarily difficult. Here is a partial list of common challenges:</p>
<ul>
<li>Vendors tend to tune their products specifically for industry-standard benchmarks. Norton SysInfo (SI) is particularly easy to tune for, since it mainly biased toward the speed of multiple operations. Use extreme caution in interpreting such results.</li>
<li>Some vendors have been accused of "cheating" at benchmarks — doing things that give much higher benchmark numbers, but make things worse on the actual likely workload.<sup id="cite_ref-0" class="reference"><a href="#cite_note-0"><span>[</span>1<span>]</span></a></sup></li>
<li>Many benchmarks focus entirely on the speed of <a href="/wiki/Computer_performance" title="Computer performance">computational performance</a>, neglecting other important features of a computer system, such as:
<ul>
<li>Qualities of service, aside from raw performance. Examples of unmeasured qualities of service include security, availability, reliability, execution integrity, serviceability, scalability (especially the ability to quickly and nondisruptively add or reallocate capacity), etc. There are often real trade-offs between and among these qualities of service, and all are important in business computing. <a href="/wiki/Transaction_Processing_Performance_Council" title="Transaction Processing Performance Council">Transaction Processing Performance Council</a> Benchmark specifications partially address these concerns by specifying <a href="/wiki/ACID" title="ACID">ACID</a> property tests, database scalability rules, and service level requirements.</li>
<li>In general, benchmarks do not measure <a href="/wiki/Total_cost_of_ownership" title="Total cost of ownership">Total cost of ownership</a>. Transaction Processing Performance Council Benchmark specifications partially address this concern by specifying that a price/performance metric must be reported in addition to a raw performance metric, using a simplified <a href="/wiki/Total_cost_of_ownership" title="Total cost of ownership">TCO</a> formula. However, the costs are necessarily only partial, and vendors have been known to price specifically (and only) for the benchmark, designing a highly specific "benchmark special" configuration with an artificially low price. Even a tiny deviation from the benchmark package results in a much higher price in real world experience.</li>
<li>Facilities burden (space, power, and cooling). When more power is used, a portable system will have a shorter battery life and require recharging more often. A server that consumes more power and/or space may not be able to fit within existing data center resource constraints, including cooling limitations. There are real trade-offs as most semiconductors require more power to switch faster. See also <a href="/wiki/Performance_per_watt" title="Performance per watt">performance per watt</a>.</li>
<li>In some embedded systems, where memory is a significant cost, better <a href="/wiki/Code_density" title="Code density" class="mw-redirect">code density</a> can significantly reduce costs.</li>
</ul>
</li>
</ul>
<ul>
<li>Vendor benchmarks tend to ignore requirements for development, test, and <a href="/wiki/Disaster_recovery" title="Disaster recovery">disaster recovery</a> computing capacity. Vendors only like to report what might be narrowly required for production capacity in order to make their initial acquisition price seem as low as possible.</li>
<li>Benchmarks are having trouble adapting to widely distributed servers, particularly those with extra sensitivity to network topologies. The emergence of <a href="/wiki/Grid_computing" title="Grid computing">grid computing</a>, in particular, complicates benchmarking since some workloads are "grid friendly", while others are not.</li>
<li>Users can have very different perceptions of performance than benchmarks may suggest. In particular, users appreciate predictability — servers that always meet or exceed <a href="/wiki/Service_level_agreement" title="Service level agreement" class="mw-redirect">service level agreements</a>. Benchmarks tend to emphasize mean scores (IT perspective), rather than maximum worst-case response times (<a href="/wiki/Real-time_computing" title="Real-time computing">real-time computing</a> perspective), or low standard deviations (user perspective).</li>
<li>Many server architectures degrade dramatically at high (near 100%) levels of usage — "fall off a cliff" — and benchmarks should (but often do not) take that factor into account. Vendors, in particular, tend to publish server benchmarks at continuous at about 80% usage — an unrealistic situation — and do not document what happens to the overall system when demand spikes beyond that level.</li>
<li>Many benchmarks focus on one application, or even one application tier, to the exclusion of other applications. Most data centers are now implementing <a href="/wiki/Hardware_virtualization" title="Hardware virtualization">virtualization</a> extensively for a variety of reasons, and benchmarking is still catching up to that reality where multiple applications and application tiers are concurrently running on consolidated servers.</li>
<li>There are few (if any) high quality benchmarks that help measure the performance of batch computing, especially high volume concurrent batch and online computing. <a href="/wiki/Batch_computing" title="Batch computing" class="mw-redirect">Batch computing</a> tends to be much more focused on the predictability of completing long-running tasks correctly before deadlines, such as end of month or end of fiscal year. Many important core business processes are batch-oriented and probably always will be, such as billing.</li>
<li>Benchmarking institutions often disregard or do not follow basic scientific method. This includes, but is not limited to: small sample size, lack of variable control, and the limited repeatability of results.<sup id="cite_ref-1" class="reference"><a href="#cite_note-1"><span>[</span>2<span>]</span></a></sup></li>
</ul>
<h2><span class="editsection">[<a href="/w/index.php?title=Benchmark_(computing)&amp;action=edit&amp;section=3" title="Edit section: Types of benchmarks">edit</a>]</span> <span class="mw-headline" id="Types_of_benchmarks">Types of benchmarks</span></h2>
<ol>
<li>Real program
<ul>
<li>word processing software</li>
<li>tool software of CDA</li>
<li>user's application software (i.e.: MIS)</li>
</ul>
</li>
<li>Microbenchmark
<ul>
<li>Designed to measure the performance of a very small and specific piece of code.</li>
</ul>
</li>
<li>Kernel
<ul>
<li>contains key codes</li>
<li>normally abstracted from actual program</li>
<li>popular kernel: Livermore loop</li>
<li>linpack benchmark (contains basic linear algebra subroutine written in FORTRAN language)</li>
<li>results are represented in MFLOPS</li>
</ul>
</li>
<li>Component Benchmark/ micro-benchmark
<ul>
<li>programs designed to measure performance of a computer's basic components <sup id="cite_ref-2" class="reference"><a href="#cite_note-2"><span>[</span>3<span>]</span></a></sup></li>
<li>automatic detection of computer's hardware parameters like number of registers, cache size, memory latency</li>
</ul>
</li>
<li>Synthetic Benchmark
<ul>
<li>Procedure for programming synthetic benchmark:
<ul>
<li>take statistics of all types of operations from many application programs</li>
<li>get proportion of each operation</li>
<li>write program based on the proportion above</li>
</ul>
</li>
<li>Types of Synthetic Benchmark are:
<ul>
<li><a href="/wiki/Whetstone_(benchmark)" title="Whetstone (benchmark)">Whetstone</a></li>
<li><a href="/wiki/Dhrystone" title="Dhrystone">Dhrystone</a></li>
</ul>
</li>
<li>These were the first general purpose industry standard computer benchmarks. They do not necessarily obtain high scores on modern pipelined computers.</li>
</ul>
</li>
<li>I/O benchmarks</li>
<li>Database benchmarks: to measure the throughput and response times of database management systems (DBMS')</li>
<li>Parallel benchmarks: used on machines with multiple cores, processors or systems consisting of multiple machines</li>
</ol>
<h2><span class="editsection">[<a href="/w/index.php?title=Benchmark_(computing)&amp;action=edit&amp;section=4" title="Edit section: Common benchmarks">edit</a>]</span> <span class="mw-headline" id="Common_benchmarks">Common benchmarks</span></h2>
<h3><span class="editsection">[<a href="/w/index.php?title=Benchmark_(computing)&amp;action=edit&amp;section=5" title="Edit section: Industry standard (audited and verifiable)">edit</a>]</span> <span class="mw-headline" id="Industry_standard_.28audited_and_verifiable.29">Industry standard (audited and verifiable)</span></h3>
<ul>
<li><a href="/wiki/BAPCo_consortium" title="BAPCo consortium">Business Applications Performance Corporation (BAPCo)</a></li>
<li><a href="/wiki/EEMBC" title="EEMBC">Embedded Microprocessor Benchmark Consortium (EEMBC)</a></li>
<li><a href="/wiki/Standard_Performance_Evaluation_Corporation" title="Standard Performance Evaluation Corporation">Standard Performance Evaluation Corporation</a> (SPEC), in particular their <a href="/wiki/SPECint" title="SPECint">SPECint</a> and <a href="/wiki/SPECfp" title="SPECfp">SPECfp</a></li>
<li><a href="/wiki/Transaction_Processing_Performance_Council" title="Transaction Processing Performance Council">Transaction Processing Performance Council</a> (TPC)</li>
<li><a href="/wiki/Coremark" title="Coremark">Coremark</a>: Embedded computing standard benchmark</li>
</ul>
<h3><span class="editsection">[<a href="/w/index.php?title=Benchmark_(computing)&amp;action=edit&amp;section=6" title="Edit section: Open source benchmarks">edit</a>]</span> <span class="mw-headline" id="Open_source_benchmarks">Open source benchmarks</span></h3>
<ul>
<li><a href="/wiki/DEISA_Benchmark_Suite" title="DEISA Benchmark Suite" class="mw-redirect">DEISA Benchmark Suite</a>: scientific HPC applications benchmark</li>
<li><a href="/wiki/Dhrystone" title="Dhrystone">Dhrystone</a>: integer arithmetic performance</li>
<li><a href="/wiki/Fhourstones" title="Fhourstones">Fhourstones</a>: an integer benchmark</li>
<li><a href="/wiki/Hierarchical_INTegration" title="Hierarchical INTegration">HINT</a>: It ranks a computer system as a whole.</li>
<li><a href="/wiki/Iometer" title="Iometer">Iometer</a>: I/O subsystem measurement and characterization tool for single and clustered systems.</li>
<li><a href="/wiki/Linpack" title="Linpack" class="mw-redirect">Linpack</a>, traditionally used to measure <a href="/wiki/FLOPS" title="FLOPS">FLOPS</a></li>
<li><a href="/wiki/LAPACK" title="LAPACK">LAPACK</a><sup class="Template-Fact" style="white-space:nowrap;">[<i><a href="/wiki/Wikipedia:Citation_needed" title="Wikipedia:Citation needed"><span title="This claim needs references to reliable sources from August 2011">citation needed</span></a></i>]</sup></li>
<li><a href="/wiki/Livermore_loops" title="Livermore loops">Livermore loops</a></li>
<li><a href="/wiki/NAS_benchmarks" title="NAS benchmarks" class="mw-redirect">NAS parallel benchmarks</a></li>
<li><a href="/wiki/NBench" title="NBench">NBench</a>: synthetic benchmark suite measuring performance of integer arithmetic, memory operations, and floating-point arithmetic</li>
<li><a href="/wiki/PAL_(software)" title="PAL (software)" class="mw-redirect">PAL</a>: a benchmark for realtime physics engines</li>
<li><a href="/wiki/Phoronix_Test_Suite" title="Phoronix Test Suite">Phoronix Test Suite</a>: open-source cross-platform benchmarking suite for Linux,OpenSolaris, FreeBSD, OSX and Windows. It includes a number of other benchmarks included on this page to simplify execution.</li>
<li><a href="/wiki/POV-Ray" title="POV-Ray">POV-Ray</a>: 3D render</li>
<li><a href="/wiki/Tak_(function)" title="Tak (function)">Tak (function)</a>: a simple benchmark used to test recursion performance</li>
<li><a href="/wiki/TATP_Benchmark" title="TATP Benchmark">TATP Benchmark</a>: Telecommunication Application Transaction Processing Benchmark</li>
<li><a href="/wiki/TPoX" title="TPoX" class="mw-redirect">TPoX</a>: An XML transaction processing benchmark for XML databases</li>
<li><a href="/wiki/Whetstone_(benchmark)" title="Whetstone (benchmark)">Whetstone</a>: floating-point arithmetic performance</li>
</ul>
<h3><span class="editsection">[<a href="/w/index.php?title=Benchmark_(computing)&amp;action=edit&amp;section=7" title="Edit section: Microsoft Windows benchmarks">edit</a>]</span> <span class="mw-headline" id="Microsoft_Windows_benchmarks">Microsoft Windows benchmarks</span></h3>
<ul>
<li><a href="/wiki/BAPCo_consortium" title="BAPCo consortium">BAPCo</a>: MobileMark, SYSmark, WebMark</li>
<li><a href="/wiki/Futuremark" title="Futuremark">Futuremark</a>: <a href="/wiki/3DMark" title="3DMark">3DMark</a>, <a href="/wiki/PCMark" title="PCMark">PCMark</a></li>
<li><a href="/wiki/Whetstone_(benchmark)" title="Whetstone (benchmark)">Whetstone</a></li>
<li><a href="/wiki/Worldbench" title="Worldbench" class="mw-redirect">Worldbench</a> (discontinued)</li>
<li><a href="/wiki/PiFast" title="PiFast" class="mw-redirect">PiFast</a></li>
<li><a href="/wiki/SuperPrime" title="SuperPrime">SuperPrime</a></li>
<li><a href="/wiki/Super_PI" title="Super PI">Super PI</a></li>
<li><a href="/wiki/Windows_System_Assessment_Tool" title="Windows System Assessment Tool">Windows System Assessment Tool</a>, included with Microsoft Windows Vista and later Windows operating systems, providing an index for consumers to rate their systems easily</li>
</ul>
<h3><span class="editsection">[<a href="/w/index.php?title=Benchmark_(computing)&amp;action=edit&amp;section=8" title="Edit section: Others">edit</a>]</span> <span class="mw-headline" id="Others">Others</span></h3>
<ul>
<li><a href="/wiki/BRL-CAD" title="BRL-CAD">BRL-CAD</a></li>
<li><a href="/wiki/Khornerstone" title="Khornerstone">Khornerstone</a></li>
<li><a href="/wiki/ICOMP_(index)" title="ICOMP (index)">iCOMP</a>, the Intel comparative microprocessor performance, published by Intel</li>
<li><a href="/wiki/Performance_Rating" title="Performance Rating">Performance Rating</a>, modeling scheme used by AMD and Cyrix to reflect the relative performance usually compared to competing products.</li>
<li><a href="/wiki/VMmark" title="VMmark">VMmark</a>, a virtualization benchmark suite.<sup id="cite_ref-3" class="reference"><a href="#cite_note-3"><span>[</span>4<span>]</span></a></sup></li>
<li><a href="/wiki/SunSpider_JavaScript_Benchmark" title="SunSpider JavaScript Benchmark" class="mw-redirect">Sunspider</a>, a Browser speed test</li>
<li><a href="/w/index.php?title=BreakingPoint_Systems&amp;action=edit&amp;redlink=1" class="new" title="BreakingPoint Systems (page does not exist)">BreakingPoint Systems</a>, modeling and simulation of network application traffic for benchmarking servers and network equipment</li>
<li><span class="citation web">Glaesemann, K. R.; van Dam, H. J. J.; Carr, J. F. (2011). <a rel="nofollow" class="external text" href="http://www.emsl.pnl.gov/capabilities/computing/msc/msc_benchmark/">"MSC Benchmark 1.0"</a>. <i>Pacific Northwest National Lab</i><span class="printonly">. <a rel="nofollow" class="external free" href="http://www.emsl.pnl.gov/capabilities/computing/msc/msc_benchmark/">http://www.emsl.pnl.gov/capabilities/computing/msc/msc_benchmark/</a></span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=MSC+Benchmark+1.0&amp;rft.atitle=Pacific+Northwest+National+Lab&amp;rft.aulast=Glaesemann&amp;rft.aufirst=K.+R.&amp;rft.au=Glaesemann%2C%26%2332%3BK.+R.&amp;rft.au=van+Dam%2C%26%2332%3BH.+J.+J.&amp;rft.au=Carr%2C%26%2332%3BJ.+F.&amp;rft.date=2011&amp;rft_id=http%3A%2F%2Fwww.emsl.pnl.gov%2Fcapabilities%2Fcomputing%2Fmsc%2Fmsc_benchmark%2F&amp;rfr_id=info:sid/en.wikipedia.org:Benchmark_(computing)"><span style="display: none;">&#160;</span></span>, a benchmark for testing massively parallel computer systems under simultaneously heavy network, memory, and CPU loads.</li>
</ul>
<h2><span class="editsection">[<a href="/w/index.php?title=Benchmark_(computing)&amp;action=edit&amp;section=9" title="Edit section: See also">edit</a>]</span> <span class="mw-headline" id="See_also">See also</span></h2>
<div class="noprint tright portal" style="border:solid #aaa 1px; margin:0.5em 0 0.5em 0.5em;">
<table style="background:#f9f9f9; font-size:85%; line-height:110%; max-width:175px;">
<tr>
<td style="text-align: center;"><a href="/wiki/File:Portal-puzzle.svg" class="image"></a></td>
<td style="padding: 0 0.2em; vertical-align: middle; font-style: italic; font-weight: bold"><a href="/wiki/Portal:Software_Testing" title="Portal:Software Testing">Software Testing  portal</a></td>
</tr>
</table>
</div>
<ul>
<li><a href="/wiki/Benchmarking" title="Benchmarking">Benchmarking</a> (business perspective)</li>
<li><a href="/wiki/Test_suite" title="Test suite">Test suite</a> a collection of test cases intended to show that a software program has some specified set of behaviors</li>
<li><a href="/wiki/Figure_of_merit" title="Figure of merit">Figure of merit</a></li>
</ul>
<h2><span class="editsection">[<a href="/w/index.php?title=Benchmark_(computing)&amp;action=edit&amp;section=10" title="Edit section: References">edit</a>]</span> <span class="mw-headline" id="References">References</span></h2>
<ol class="references">
<li id="cite_note-0"><span class="mw-cite-backlink"><b><a href="#cite_ref-0">^</a></b></span> <span class="reference-text"><span class="citation news">Krazit, Tom (2003). <a rel="nofollow" class="external text" href="http://www.pcworld.com/article/111012/nvidias_benchmark_tactics_reassessed.html">"NVidia's Benchmark Tactics Reassessed"</a>. <i>IDG News</i><span class="printonly">. <a rel="nofollow" class="external free" href="http://www.pcworld.com/article/111012/nvidias_benchmark_tactics_reassessed.html">http://www.pcworld.com/article/111012/nvidias_benchmark_tactics_reassessed.html</a></span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=article&amp;rft.atitle=NVidia%27s+Benchmark+Tactics+Reassessed&amp;rft.jtitle=IDG+News&amp;rft.aulast=Krazit&amp;rft.aufirst=Tom&amp;rft.au=Krazit%2C%26%2332%3BTom&amp;rft.date=2003&amp;rft_id=http%3A%2F%2Fwww.pcworld.com%2Farticle%2F111012%2Fnvidias_benchmark_tactics_reassessed.html&amp;rfr_id=info:sid/en.wikipedia.org:Benchmark_(computing)"><span style="display: none;">&#160;</span></span></span></li>
<li id="cite_note-1"><span class="mw-cite-backlink"><b><a href="#cite_ref-1">^</a></b></span> <span class="reference-text"><span class="citation web">Castor, Kevin (2006). <a rel="nofollow" class="external text" href="http://donutey.com/hardwaretesting.php">"Hardware Testing and Benchmarking Methodology"</a><span class="printonly">. <a rel="nofollow" class="external free" href="http://donutey.com/hardwaretesting.php">http://donutey.com/hardwaretesting.php</a></span><span class="reference-accessdate">. Retrieved 2008-02-24</span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=Hardware+Testing+and+Benchmarking+Methodology&amp;rft.atitle=&amp;rft.aulast=Castor&amp;rft.aufirst=Kevin&amp;rft.au=Castor%2C%26%2332%3BKevin&amp;rft.date=2006&amp;rft_id=http%3A%2F%2Fdonutey.com%2Fhardwaretesting.php&amp;rfr_id=info:sid/en.wikipedia.org:Benchmark_(computing)"><span style="display: none;">&#160;</span></span></span></li>
<li id="cite_note-2"><span class="mw-cite-backlink"><b><a href="#cite_ref-2">^</a></b></span> <span class="reference-text"><span class="citation Journal">Ehliar, Andreas; Liu, Dake (PDF). <a rel="nofollow" class="external text" href="http://www.da.isy.liu.se/pubs/ehliar/ehliar-ssocc2004.pdf"><i>Benchmarking network processors</i></a><span class="printonly">. <a rel="nofollow" class="external free" href="http://www.da.isy.liu.se/pubs/ehliar/ehliar-ssocc2004.pdf">http://www.da.isy.liu.se/pubs/ehliar/ehliar-ssocc2004.pdf</a></span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=book&amp;rft.btitle=Benchmarking+network+processors&amp;rft.aulast=Ehliar&amp;rft.aufirst=Andreas&amp;rft.au=Ehliar%2C%26%2332%3BAndreas&amp;rft.au=Liu%2C%26%2332%3BDake&amp;rft_id=http%3A%2F%2Fwww.da.isy.liu.se%2Fpubs%2Fehliar%2Fehliar-ssocc2004.pdf&amp;rfr_id=info:sid/en.wikipedia.org:Benchmark_(computing)"><span style="display: none;">&#160;</span></span></span></li>
<li id="cite_note-3"><span class="mw-cite-backlink"><b><a href="#cite_ref-3">^</a></b></span> <span class="reference-text"><span class="citation Journal"><a rel="nofollow" class="external text" href="http://www.vmware.com.mx/pdf/VMmark_Rules_1.1.1_20080611-1.pdf">"VMmark Rules 1.1.1"</a> (PDF). <i>VMWare</i>. 2008<span class="printonly">. <a rel="nofollow" class="external free" href="http://www.vmware.com.mx/pdf/VMmark_Rules_1.1.1_20080611-1.pdf">http://www.vmware.com.mx/pdf/VMmark_Rules_1.1.1_20080611-1.pdf</a></span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=article&amp;rft.atitle=VMmark+Rules+1.1.1&amp;rft.jtitle=VMWare&amp;rft.date=2008&amp;rft_id=http%3A%2F%2Fwww.vmware.com.mx%2Fpdf%2FVMmark_Rules_1.1.1_20080611-1.pdf&amp;rfr_id=info:sid/en.wikipedia.org:Benchmark_(computing)"><span style="display: none;">&#160;</span></span></span></li>
</ol>
<h2><span class="editsection">[<a href="/w/index.php?title=Benchmark_(computing)&amp;action=edit&amp;section=11" title="Edit section: Further reading">edit</a>]</span> <span class="mw-headline" id="Further_reading">Further reading</span></h2>
<ul>
<li><span class="citation book">Gray, Jim, ed. (1993). <i>The Benchmark Handbook for Database and Transaction Systems</i>. Morgan Kaufmann Series in Data Management Systems (2nd ed.). Morgan Kaufmann Publishers, Inc. <a href="/wiki/International_Standard_Book_Number" title="International Standard Book Number">ISBN</a>&#160;<a href="/wiki/Special:BookSources/1-55860-292-5" title="Special:BookSources/1-55860-292-5">1-55860-292-5</a>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=book&amp;rft.btitle=The+Benchmark+Handbook+for+Database+and+Transaction+Systems&amp;rft.date=1993&amp;rft.series=Morgan+Kaufmann+Series+in+Data+Management+Systems&amp;rft.edition=2nd&amp;rft.pub=Morgan+Kaufmann+Publishers%2C+Inc&amp;rft.isbn=1-55860-292-5&amp;rfr_id=info:sid/en.wikipedia.org:Benchmark_(computing)"><span style="display: none;">&#160;</span></span></li>
<li><span class="citation book">Scalzo, Bert; Kline, Kevin; Fernandez, Claudia; Burleson, Donald K.; <a href="/wiki/Mike_Ault" title="Mike Ault">Ault, Mike</a> (2007). <i>Database Benchmarking Practical Methods for Oracle &amp; SQL Server</i>. <a href="/wiki/International_Standard_Book_Number" title="International Standard Book Number">ISBN</a>&#160;<a href="/wiki/Special:BookSources/0-9776715-3-4" title="Special:BookSources/0-9776715-3-4">0-9776715-3-4</a>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=book&amp;rft.btitle=Database+Benchmarking+Practical+Methods+for+Oracle+%26+SQL+Server&amp;rft.aulast=Scalzo&amp;rft.aufirst=Bert&amp;rft.au=Scalzo%2C%26%2332%3BBert&amp;rft.au=Kline%2C%26%2332%3BKevin&amp;rft.au=Fernandez%2C%26%2332%3BClaudia&amp;rft.au=Burleson%2C%26%2332%3BDonald+K.&amp;rft.au=Ault%2C%26%2332%3BMike&amp;rft.date=2007&amp;rft.isbn=0-9776715-3-4&amp;rfr_id=info:sid/en.wikipedia.org:Benchmark_(computing)"><span style="display: none;">&#160;</span></span></li>
<li><span class="citation book">Nambiar, Raghunath; Poess, Meikel, eds. (2009). <i>Performance Evaluation and Benchmarking</i>. Springer. <a href="/wiki/International_Standard_Book_Number" title="International Standard Book Number">ISBN</a>&#160;<a href="/wiki/Special:BookSources/978-3-642-10423-7" title="Special:BookSources/978-3-642-10423-7">978-3-642-10423-7</a>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=book&amp;rft.btitle=Performance+Evaluation+and+Benchmarking&amp;rft.date=2009&amp;rft.pub=Springer&amp;rft.isbn=978-3-642-10423-7&amp;rfr_id=info:sid/en.wikipedia.org:Benchmark_(computing)"><span style="display: none;">&#160;</span></span></li>
</ul>
<h2><span class="editsection">[<a href="/w/index.php?title=Benchmark_(computing)&amp;action=edit&amp;section=12" title="Edit section: External links">edit</a>]</span> <span class="mw-headline" id="External_links">External links</span></h2>
<ul>
<li><a rel="nofollow" class="external text" href="news:comp.benchmarks">benchmark newsgroup</a></li>
<li><a rel="nofollow" class="external text" href="http://www.forum-inside.de/cgi-bin/forum/benchmark_e.cgi">3DMark Vantage, 3DMark06, 3DMark05, 3DMark03, 3DMark01, Aquamark and Super PI benchmark database</a></li>
<li><a rel="nofollow" class="external text" href="http://lbs.sourceforge.net/">Linux benchmark suite</a></li>
<li><a rel="nofollow" class="external text" href="http://www.netlib.org/">Open source benchmark programs</a></li>
<li><a rel="nofollow" class="external text" href="http://hwbot.org/">A site dedicated to benchmarking and overclocking of CPUs and GPUs.</a></li>
</ul>
    </div>