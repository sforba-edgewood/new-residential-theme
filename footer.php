<?php 
    $logo = get_field( "property_logo", 'option' );
    $leasing_copy = get_field( "leasing_office_copy", 'option' );
    $phone = get_field( "phone", 'option' );
    $edgewood_logo = get_field( "edgewood_logo", 'option' );
    $copyright = get_field( "copyright", 'option' );

?>
<footer class="footer">
    <div class="footer__container footer__top pt-14 pb-10 container mx-auto grid grid-cols-3">
        <div class="footer-col flex flex-col">
            <div class="">
                <img class="max-w-xs mx-auto w-full" src="<? echo $logo; ?>" alt="New Residential Theme"/>
            </div>
        </div>
        <div class="footer-col flex flex-col">
            <h3 class="text-xl font-bold mb-4 footer__title">Leasing Office</h3>
            <div class="mb-3">
                <h4 class="font-bold">Address:</h4>
                <? echo $leasing_copy; ?>
            </div>
            <div class="mb-3">
                <h4 class="font-bold">Phone:</h4>
                <? echo $phone; ?>
            </div>
            <div>
                <h4 class="font-bold">Email</h4>
                <? echo $phone; ?>
            </div>
        </div>
        <div class="footer-col flex flex-col">
            <div>
                <h3 class="text-xl font-bold mb-4 footer__title">Connect With Us: </h3>
                <ul>
                    <li>
                        <a href="">
                        </a>
                    </li>
                </ul>
            </div>
            <div>
                <h3 class="text-xl font-bold mb-4 footer__title">Sitemap </h3>
                <div>
                    <a target="_blank" href="/sitemap">
                        Sitemap
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-12 pb-8 footer__container footer__bottom">
        <div class="">
            <img class="max-w-[208px] mx-auto mb-4 w-full" src="<? echo $edgewood_logo; ?>" alt="New Residential Theme"/>
        </div>
        <div>
            <p class="text-base font-thin text-center">
                <? echo $copyright; ?>
            </p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>