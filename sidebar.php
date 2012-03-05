<div class="five columns sidebar-area">
    <div class="padding">
        <aside>
            <ul>
            <?php
            //displays on all pages
            if (function_exists('dynamic_sidebar') && dynamic_sidebar('') ) : ?>
            <?php endif; ?>
            </ul>
        </aside>
    </div><!-- end .padding -->
</div><!-- end .five.columns.sidebar-area -->