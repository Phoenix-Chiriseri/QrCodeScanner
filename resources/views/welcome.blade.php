<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Section</title>

    <!-- Bulma CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">

    <style>
        /* Custom styles for the QR code section */
        .section {
            background-color: #f5f5f5;
            padding: 3rem 0;
        }

        .qr-code-container {
            text-align: center;
        }

        .qr-code-box {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .qr-code-img {
            margin: 20px auto;
        }

        /* Flashing message animation */
        .flashing-message {
            animation: flash 1s infinite alternate;
        }

        @keyframes flash {
            0% {
                opacity: 8;
            }
            100% {
                opacity: 0.3;
            }
        }
    </style>
</head>
<body>
    <section class="section">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-half">
                    <div class="box qr-code-box">
                        <div class="content has-text-centered qr-code-container">
                            <div class="qr-code-img">
                                {!! QrCode::size(300)->generate('/form'); !!}
                            </div>
                            <p class="mt-3 flashing-message">Please Scan The Barcode And Leave Us Your Feedback</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
