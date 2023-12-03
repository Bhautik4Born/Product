        $(document).ready(function() {
            // Make API call
            $.ajax({
                url: "https://seamarineservice.in/4born%20Market/Admin%20market/api/btc_bitcoin.php",
                method: "GET",
                dataType: "json",
                success: function(response) {
                    if (response.response.status === "success") {
                        const bitcoinPrice = response.data.price;
                        const btcPriceElement = document.getElementById("btc-price");
                        btcPriceElement.innerHTML = bitcoinPrice;
                    } else {
                        console.error("API call failed");
                    }
                },
                error: function() {
                    console.error("API call failed");
                }
            });
        });
