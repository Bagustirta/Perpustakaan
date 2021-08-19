<!DOCTYPE html>
<html>
    <head>
        <title>Sidebar</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/uikit.min.css" />
        <link rel="stylesheet" href="sidebar.css" />
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.min.js"></script>
    </head>
    <body>

    <nav class="uk-navbar uk-navbar-container uk-margin">

<div class="uk-navbar-left">
    <a class="uk-navbar-toggle" uk-navbar-toggle-icon uk-toggle width="30"  href="#sidebar"></a>
    <div id="sidebar" class="uk-background-secondary tm-sidebar-left uk-visible@m" off-canvas>
        <ul class="uk-nav uk-nav-default tm-nav">
            <li class="uk-nav-header"></li> 
            <li class=""><a href="index">Beranda</a></li>
            <li class=""><a href="halaman_admin.php">Master Data</a></li>
            <li class=""><a href="/docs/sass">Katalog Buku</a></li>
            <li class=""><a href="/docs/javascript">Data Transaksi</a></li>
            <li class=""><a href="/docs/webpack">Webpack</a></li>
            <li class=""><a href="/docs/custom-icons">Custom icons</a></li>
            <li class=""><a href="/docs/avoiding-conflicts">Avoiding conflicts</a></li>
            <li class=""><a href="/docs/rtl">RTL support</a></li>
            <li class=""><a href="/docs/migration">Migration</a></li>
        </ul>
    </div>

<div class="uk-navbar-center">
    <img src="logo.png" alt="" width="55px" ><h3 class="uk-align-center uk-padding">SMK NEGERI 1 DENPASAR</h3></img>
</div>

<div class="uk-navbar-item uk-navbar-right">
       
<a href="logout.php"><button class="uk-button uk-button-default">Log Out</button></a>
      
    </div>

</nav>

 

    <div class="uk-container uk-container-small uk-position-relative"><div><!----> <div>
        <h1 id="introduction" class="uk-h1 tm-heading-fragment"><a href="#introduction">Introduction</a></h1>
        <p class="uk-text-lead">Get familiar with the basic setup and overview of UIkit.</p>

<p>First of all you need to download UIkit. For other packages and links to a CDN, head to the <a href="installation">installation guide</a> to learn more.</p>
<p><a class="uk-button uk-button-primary" href="https://getuikit.com/download">Download UIkit</a></p>
<hr class="uk-margin-large"><h2 id="package-contents" class="uk-h3 tm-heading-fragment"><a href="#package-contents">Package contents</a></h2><p>The Zip file contains the compiled CSS and JavaScript files, which is everything you need to get started. Later, you might want to <a href="installation">install and compile UIkit</a> yourself and also <a href="less">create your own UIkit theme</a>.</p>
<div class="uk-overflow-auto"><table class="uk-table uk-table-divider"><thead><tr>
<th align="left">Folder</th>
<th align="left">Description</th>
</tr>
</thead><tbody><tr>
<td align="left"><code>/css</code></td>
<td align="left">Contains the UIkit CSS and a right-to-left version.</td>
</tr>
<tr>
<td align="left"><code>/js</code></td>
<td align="left">Contains the UIkit JavaScript and the Icon Library JavaScript.</td>
</tr>
</tbody></table></div><hr class="uk-margin-large"><h2 id="html-markup" class="uk-h3 tm-heading-fragment"><a href="#html-markup">HTML markup</a></h2><p>Add the compiled and minified CSS and JavaScript to the <code>&lt;head&gt;</code> element of your HTML5 document. Also include the UIkit icon library. For your basic setup, that's it.</p>
<div class="uk-margin-medium"><pre><code class="lang-html hljs xml"><span class="hljs-meta">&lt;!DOCTYPE html&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">title</span>&gt;</span>Title<span class="hljs-tag">&lt;/<span class="hljs-name">title</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">meta</span> <span class="hljs-attr">charset</span>=<span class="hljs-string">"utf-8"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">meta</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"viewport"</span> <span class="hljs-attr">content</span>=<span class="hljs-string">"width=device-width, initial-scale=1"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">link</span> <span class="hljs-attr">rel</span>=<span class="hljs-string">"stylesheet"</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"css/uikit.min.css"</span> /&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">script</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"js/uikit.min.js"</span>&gt;</span><span class="undefined"></span><span class="hljs-tag">&lt;/<span class="hljs-name">script</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">script</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"js/uikit-icons.min.js"</span>&gt;</span><span class="undefined"></span><span class="hljs-tag">&lt;/<span class="hljs-name">script</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
</div><p>Once you have included UIkit into your document, take a look at the available components and create your own markup inside the <code>&lt;body&gt;</code> element of your page.</p>
<hr class="uk-margin-large"><h2 id="uikit-autocomplete-for-your-editor" class="uk-h3 tm-heading-fragment"><a href="#uikit-autocomplete-for-your-editor">UIkit autocomplete for your editor</a></h2><p>Using UIkit works best if you have a solid code editor, for example <a href="https://www.sublimetext.com/">Sublime Text</a> or <a href="https://atom.io/">Atom</a>. To be even more efficient, we recommend that you install one of the autocomplete plugins for your favorite IDE or code editor. This saves a lot of time, as you won't have to look up and type all UIkit classes and markup.</p>
<ul class="uk-list uk-list-disc"><li><a href="https://github.com/uikit/uikit-sublime">Autocomplete plugin for Sublime Text 3</a></li>
<li><a href="https://atom.io/packages/uikit-atom">Autocomplete plugin for Atom</a></li>
<li><a href="https://marketplace.visualstudio.com/items?itemName=Keno.uikit-3-snippets">Snippets for Visual Studio Code</a></li>
</ul><hr class="uk-margin-large"><h2 id="browser-support" class="uk-h3 tm-heading-fragment"><a href="#browser-support">Browser support</a></h2><p>The following table lists the versions that UIkit is tested on. "Latest" means that it works just fine on all recent versions of that browser. With many browser moving towards a rolling release strategy, pinning down browser support to a specific version has become a little tricky in recent years. Long story short: UIkit will work on pretty much any modern browser.</p>
<div class="uk-child-width-1-3 uk-child-width-expand@s uk-text-center uk-grid" uk-grid="" uk-height-match="> * > div">
    <div class="uk-first-column">
        <div class="uk-flex uk-flex-center uk-flex-middle" style="">
            <img src="https://raw.githubusercontent.com/alrra/browser-logos/master/src/chrome/chrome.svg?sanitize=true" width="50" alt="Chrome">
        </div>
        <p>Latest</p>
    </div>
    <div>
        <div class="uk-flex uk-flex-center uk-flex-middle" style="min-height: 50px;">
            <img src="https://raw.githubusercontent.com/alrra/browser-logos/master/src/firefox/firefox.svg?sanitize=true" width="50" alt="Firefox">
        </div>
        <p>Latest</p>
    </div>
    <div>
        <div class="uk-flex uk-flex-center uk-flex-middle" style="min-height: 50px;">
            <img src="https://raw.githubusercontent.com/alrra/browser-logos/master/src/edge/edge.svg?sanitize=true" width="50" alt="Edge">
        </div>
        <p>Latest</p>
    </div>
    <div>
        <div class="uk-flex uk-flex-center uk-flex-middle" style="min-height: 50px;">
            <img src="https://raw.githubusercontent.com/alrra/browser-logos/master/src/archive/internet-explorer_9-11/internet-explorer_9-11.svg?sanitize=true" width="50" alt="IE">
        </div>
        <p>11+</p>
    </div>
    <div>
        <div class="uk-flex uk-flex-center uk-flex-middle" style="min-height: 50px;">
            <img src="https://raw.githubusercontent.com/alrra/browser-logos/master/src/safari-ios/safari-ios.svg?sanitize=true" width="50" alt="Safari">
        </div>
        <p>9.1+</p>
    </div>
    <div>
        <div class="uk-flex uk-flex-center uk-flex-middle" style="min-height: 50px;">
            <img src="https://raw.githubusercontent.com/alrra/browser-logos/master/src/opera/opera.svg?sanitize=true" width="50" alt="Opera">
        </div>
        <p>Latest</p>
    </div>
</div>
</div></div> <div class="tm-sidebar-right uk-visible@l"><div uk-sticky="offset: 160" class="uk-sticky uk-active uk-sticky-fixed" style="position: fixed; top: 160px; width: 200px;"><ul uk-scrollspy-nav="closest: li; scroll: true; offset: 100" class="uk-nav uk-nav-default tm-nav uk-nav-parent-icon"><li class="uk-active"><a href="#package-contents">Package contents</a></li><li class=""><a href="#html-markup">HTML markup</a></li><li class=""><a href="#uikit-autocomplete-for-your-editor">UIkit autocomplete for your editor</a></li><li class=""><a href="#browser-support">Browser support</a></li> <li class="uk-nav-divider"></li> <!----> <li><a href="https://github.com/uikit/uikit/issues" target="_blank"><span uk-icon="warning" class="uk-margin-small-right uk-icon"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><circle cx="10" cy="14" r="1"></circle><circle fill="none" stroke="#000" stroke-width="1.1" cx="10" cy="10" r="9"></circle><path d="M10.97,7.72 C10.85,9.54 10.56,11.29 10.56,11.29 C10.51,11.87 10.27,12 9.99,12 C9.69,12 9.49,11.87 9.43,11.29 C9.43,11.29 9.16,9.54 9.03,7.72 C8.96,6.54 9.03,6 9.03,6 C9.03,5.45 9.46,5.02 9.99,5 C10.53,5.01 10.97,5.44 10.97,6 C10.97,6 11.04,6.54 10.97,7.72 L10.97,7.72 Z"></path></svg></span> <span class="uk-text-middle">Report issue</span></a></li> <li><a href="https://discordapp.com/invite/NEt4Pv7" target="_blank"><span uk-icon="commenting" class="uk-margin-small-right uk-icon"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polygon fill="none" stroke="#000" points="1.5,1.5 18.5,1.5 18.5,13.5 10.5,13.5 6.5,17.5 6.5,13.5 1.5,13.5"></polygon><circle cx="10" cy="8" r="1"></circle><circle cx="6" cy="8" r="1"></circle><circle cx="14" cy="8" r="1"></circle></svg></span> <span class="uk-text-middle">Get help</span></a></li> <li><a href="https://github.com/uikit/uikit-site/tree/develop/docs/pages/introduction.md" target="_blank"><span uk-icon="pencil" class="uk-margin-small-right uk-icon"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill="none" stroke="#000" d="M17.25,6.01 L7.12,16.1 L3.82,17.2 L5.02,13.9 L15.12,3.88 C15.71,3.29 16.66,3.29 17.25,3.88 C17.83,4.47 17.83,5.42 17.25,6.01 L17.25,6.01 Z"></path><path fill="none" stroke="#000" d="M15.98,7.268 L13.851,5.148"></path></svg></span> <span class="uk-text-middle">Edit this page</span></a></li></ul></div><div class="uk-sticky-placeholder" style="height: 241px; margin: 0px;"></div></div></div>

    </body>
</html>