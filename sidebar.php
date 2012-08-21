<div class="five columns sidebar-area">
    <div class="padding">
        <aside>
            <ul>
                <?php
                // GET THE SIDEBAR WIDGETS
                if (function_exists('dynamic_sidebar') && dynamic_sidebar('sidebar') ) : ?>
                <?php endif; ?>
            </ul>
        </aside>
    </div><!-- end .padding -->
</div><!-- end .five.columns.sidebar-area -->