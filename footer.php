<?php 
    $logo = get_field( "logo", 'option' );

?>
<footer class="footer">
    <div>
        <div>
            <div>
                <img src="<? echo $logo; ?>" alt="New Residential Theme"/>
            </div>
        </div>
        <div>
        </div>
        <div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>