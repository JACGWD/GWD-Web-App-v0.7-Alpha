<nav>
<a class="hide-text" id="hamburger" onclick="NavShow();">Navigation</a>

<ul class="navigation">

    <li><a href="/index.php" <?php if ($Highlight_Menu_item=="home") echo " class=\"currentpage\""; ?>>home</a>
    <ul>
    <li><a href="https://community.graphicandwebdesign.ca/blogs/index.php" <?php if ($Highlight_Menu_item=="blog") echo " class=\"currentpage\""; ?>>blog</a></li>
    </ul>
    </li>

    <li><a href="/about.php" <?php if ($Highlight_Menu_item=="home") echo " class=\"currentpage\""; ?>>about</a>
    <ul>

    <li><a href="/privacy-policy.php" <?php if ($Highlight_Menu_item=="about") echo " class=\"currentpage\""; ?>>privacy policy</a></li>
    </ul>
    </li>

  <li><a href="/contact.php" <?php if ($Highlight_Menu_item=="contact") echo " class=\"currentpage\""; ?>>contact</a></li>
</ul>
</nav>
