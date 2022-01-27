<?php
#
#
# Cross site scripting mitigation
#
# Adjust as needed for your situation.
#
# https://content-security-policy.com/
# https://csp.withgoogle.com/docs/index.html
# https://csp-evaluator.withgoogle.com/
#

header("Content-Security-Policy: script-src 'none'; object-src 'none';base-uri 'none'; require-trusted-types-for 'script'; frame-ancestors: 'none'") ;
header("X-Content-Type-Options: nosniff");
header("Strict-Transport-Security: max-age=31536000; includeSubDomains");

?>
