<div>
    <script>
        (function() {
            const completeInner =
                'target="_blank"><p>Enviar comprobante de pago <i class="bx bxl-whatsapp"></i></p>';

            function sendInvoiceLaPlaza() {
                const sendInvoice = document.querySelectorAll("#invoice_button");

                //Links Balneario la plaza
                const wYeniferLaPlaza = "https://wa.link/uohjxb";
                const wLizLaPlaza = "https://wa.link/g05gkq";

                //wYenifer
                sendInvoice[0].innerHTML = `<a href="${wYeniferLaPlaza}" ${completeInner}</a>`;
                //wLiz
                sendInvoice[1].innerHTML = `<a href="${wLizLaPlaza}" ${completeInner}</a>`;
                return;
            }
            sendInvoiceLaPlaza();
        })();
    </script>
</div>