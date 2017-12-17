		</main>

        <?php
        if( !$amp ) {
            echo '  <script src="/js/vendor.min.js"></script>
                    <script src="/js/app.min.js"></script>
                    <script src="/js/smaterial.js"></script>
                    <script src="/js/prism.js"></script>';
        }
		if( TEST === false ) {
            if( $amp ) {
                echo '
                    <amp-analytics type="googleanalytics">
                        <script type="application/json">
                        {
                            "vars": {
                                "account": "UA-19820377-5"
                            },
                            "triggers": {
                                "trackPageview": {
                                "on": "visible",
                                    "request": "pageview"
                                }
                            }
                        }
                        </script>
                    </amp-analytics>
                ';
            } else {
				echo '
                    <script>
                        (function(i,s,o,g,r,a,m){i["GoogleAnalyticsObject"]=r;i[r]=i[r]||function(){
                            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                          })(window,document,"script","https://www.google-analytics.com/analytics.js","ga");
            
                          ga("create", "UA-19820377-5", "auto");
                          ga("send", "pageview");
                    </script>';
			}
        }
		?>
	</body>
</html>