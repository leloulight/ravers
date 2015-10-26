<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="/checkout" method="POST">
            <script
                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                data-key="{{ Config::get('services.stripe.public') }}"
                data-amount="2000"
                data-name="Demo Site"
                data-description="2 widgets ($20.00)"
                data-image="img/128x128.png"
                data-locale="auto">
            </script>
            <input type="hidden" name="amount" value="2000"/>
            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
        </form>
</body>
</html>