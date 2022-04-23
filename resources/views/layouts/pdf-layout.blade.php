<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title', 'Exportation')</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title> {{ config('app.name', 'ONIP') }} | @yield('title', 'Exportation') </title>

    <link rel="stylesheet" href="{{ asset('css/print-styles.css') }}">
</head>

<body>

    @yield('content')
{{--
    <script type="text/php">
        if (isset($pdf) && $PAGE_COUNT > 1) {
                $text = "Page {PAGE_NUM} / {PAGE_COUNT}";
                $size = 10;
                $font = $fontMetrics->getFont("Verdana");
                $width = $fontMetrics->get_text_width($text, $font, $size) / 2;
                $x = ($pdf->get_width() - $width);
                $y = $pdf->get_height() - 35;
                $pdf->page_text($x, $y, $text, $font, $size);
            }
        </script> --}}
</body>

</html>
