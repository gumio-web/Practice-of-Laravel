<html>

<head>
    <title>Hello/Index</title>
    <style>
        body {
            font-size: 16pt;
            color: #999;
        }

        h1 {
            font-size: 100pt;
            text-align: right;
            color: #f6f6f6;
            margin: -50px 0 -100px 0;
        }
    </style>
</head>
<!-- P62〜 値をテンプレートに渡す。 + P64〜 ルートパラメータをテンプレートに渡す。 + P66〜 クエリ文字列を利用して値を渡す。 -->

<body>
    <h1>Index</h1>
    <p><?php echo $msg; ?></p>
    <p>ID=<?php echo $id; ?></p>
</body>

</html>