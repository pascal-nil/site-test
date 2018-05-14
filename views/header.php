<div class="header">
    Je suis le header (logo)
    <div class="button-container">
        <?php $url = $_SERVER['REQUEST_URI'];
        $page = explode("/", $url);

        if (strcmp($page[2], "index.php") !== 0 && strcmp($page[2], "") !== 0) {
            ?>
            <span class="button-style"><a href="/page-test/" class="button">Go to Home</a></span>
            <?php
        }
        if (count($page) === 3 || strcmp($page[3], "page1.php") !== 0) {
            ?>
            <span class="button-style"><a href="/page-test/views/page1.php" class="button">Go to Page 1</a></span>
            <?php
        }
        if (count($page) === 3 || strcmp($page[3], "page2.php") !== 0) {
            ?>
            <span class="button-style"><a href="/page-test/views/page2.php" class="button">Go to Page 2</a></span>
            <?php
        }
        if (count($page) === 3 || strcmp($page[3], "page3.php") !== 0) {
            ?>
            <span class="button-style"><a href="/page-test/views/page3.php" class="button">Go to Page 3</a></span>
            <?php
        }
        if (count($page) === 3 || strcmp($page[3], "page4.php") !== 0) {
            ?>
            <span class="button-style"><a href="/page-test/views/page4.php" class="button">Go to Page 4</a></span>
            <?php
        }
        if (count($page) === 3 || strcmp($page[3], "page5.php") !== 0) {
            ?>
            <span class="button-style"><a href="/page-test/views/page5.php" class="button">Go to Page 5</a></span>
            <?php
        }
        ?>
    </div>
</div>