<p>第四关:理解</p>
<p>-要理解某个事物的底层含义,而不是仅仅停留在表面</p>
<link rel='stylesheet' type='text/css' href='https://cdn.bootcss.com/SyntaxHighlighter/3.0.83/styles/shCoreRDark.css'/>
<div class="syntaxhighlighter  php" id="highlighter_323717"><div class="toolbar"><span><a class="toolbar_item command_help help" href="#">?</a></span></div><table border="0" cellspacing="0" cellpadding="0"><tbody><tr><td class="gutter"><div class="line number1 index0 alt2">1</div><div class="line number2 index1 alt1">2</div><div class="line number3 index2 alt2">3</div><div class="line number4 index3 alt1">4</div><div class="line number5 index4 alt2">5</div><div class="line number6 index5 alt1">6</div><div class="line number7 index6 alt2">7</div><div class="line number8 index7 alt1">8</div><div class="line number9 index8 alt2">9</div><div class="line number10 index9 alt1">10</div><div class="line number11 index10 alt2">11</div><div class="line number12 index11 alt1">12</div><div class="line number13 index12 alt2">13</div></td><td class="code"><div class="container"><div class="line number1 index0 alt2"><code class="php functions">ini_set</code><code class="php plain">(</code><code class="php string">"display_errors"</code><code class="php plain">,0);</code></div><div class="line number2 index1 alt1"><code class="php keyword">if</code><code class="php plain">(isset(</code><code class="php variable">$_GET</code><code class="php plain">[</code><code class="php string">'flag'</code><code class="php plain">])&nbsp;&amp;&amp;&nbsp;</code><code class="php variable">$_GET</code><code class="php plain">[</code><code class="php string">'flag'</code><code class="php plain">]&nbsp;===&nbsp;</code><code class="php string">"flag{*********************}"</code><code class="php plain">)</code></div><div class="line number3 index2 alt2"><code class="php plain">{</code></div><div class="line number4 index3 alt1"><code class="php spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="php functions">echo</code>&nbsp;<code class="php string">'*************************************'</code><code class="php plain">;</code></div><div class="line number5 index4 alt2"><code class="php plain">}</code></div><div class="line number6 index5 alt1"><code class="php variable">$ducker</code>&nbsp;<code class="php plain">=&nbsp;create_function(</code><code class="php string">""</code><code class="php plain">,</code><code class="php string">"echo&nbsp;flag{*************************};"</code><code class="php plain">);</code></div><div class="line number7 index6 alt2"><code class="php variable">$hash</code>&nbsp;<code class="php plain">=&nbsp;RamHsash();</code></div><div class="line number8 index7 alt1"><code class="php functions">eval</code><code class="php plain">(</code><code class="php string">"function&nbsp;suffer_$hash(){"</code></div><div class="line number9 index8 alt2"><code class="php spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="php plain">.</code><code class="php string">"global&nbsp;\$MY;"</code></div><div class="line number10 index9 alt1"><code class="php spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="php plain">.</code><code class="php string">"\$ducker();"</code></div><div class="line number11 index10 alt2"><code class="php spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="php plain">.</code><code class="php string">"}"</code><code class="php plain">);</code></div><div class="line number12 index11 alt1"><code class="php keyword">if</code><code class="php plain">(isset(</code><code class="php variable">$_GET</code><code class="php plain">[</code><code class="php string">'you'</code><code class="php plain">]))</code></div><div class="line number13 index12 alt2"><code class="php spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="php variable">$_GET</code><code class="php plain">[</code><code class="php string">"you"</code><code class="php plain">]();</code></div></div></td></tr></tbody></table></div>
<?php
ini_set("display_errors",0);
if(isset($_GET['flag']) && $_GET['flag'] === "flag{unrealyflag2_TSAOZGQKSJ}")
{
	echo 'Next Door: php_ctf_really_by_huoji.php';
	
}
/*
//实验环境可以这样做,但是我是免费空间所以有 50000+个fork进程 爆破到猴年马月 var_dump($MY);
$MY = create_function("","die(`flag{unrealyflag2_TSAOZGQKSJ}`);");
$hash = bin2hex(openssl_random_pseudo_bytes(32));
eval("function SUCTF_$hash(){"
        ."global \$MY;"
        ."\$MY();"
        ."}");
if(isset($_GET['you'])){
        $_GET["you"]();
        die();
}*/
if(isset($_GET['you'])){
	if(strpos($_GET['you'], "lambda_42") !== false && !is_array($_GET['you']))
		die('flag{unrealyflag2_TSAOZGQKSJ}');
}
?>
<p></p>