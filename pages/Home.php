<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/style.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<script>
    $(document).ready(function(){
        console.log("Document Ready");

        function addHidden(){
            $("#menuJualObat").addClass("hidden");
            $("#menuBeliObat").addClass("hidden");
            $("#menuRequestObat").addClass("hidden");
            $("#menuCekInventorySendiri").addClass("hidden");
            $("#menuCekInventoryLain").addClass("hidden");
            $("#menuRacikObat").addClass("hidden");
            $("#menuHistoryLog").addClass("hidden");
            $("#menuSync").addClass("hidden");
        }

        $("#jualObat").click(function(){
            addHidden()
            $("#menuJualObat").toggleClass("hidden");
        })

        $("#beliObat").click(function(){
            addHidden()
            $("#menuBeliObat").toggleClass("hidden");
        })

        $("#requestObat").click(function(){
            addHidden()
            $("#menuRequestObat").toggleClass("hidden");
        })

        $("#cekInventorySendiri").click(function(){
            addHidden()
            $("#menuCekInventorySendiri").toggleClass("hidden");
        })
        
        $("#cekInventoryLain").click(function(){
            addHidden()
            $("#menuCekInventoryLain").toggleClass("hidden");
        })
        
        $("#racikObat").click(function(){
            addHidden()
            $("#menuRacikObat").toggleClass("hidden");
        })
        
        $("#historyLog").click(function(){
            addHidden()
            $("#menuHistoryLog").toggleClass("hidden");
        })
        
        $("#sync").click(function(){
            addHidden()
            $("#menuSync").toggleClass("hidden");
        })
    });

    

</script>
<body>
    <nav>
        <h1>Menu Apotek</h1>
        <ul>
            <li id="jualObat">Jual Obat</li>
            <li id="beliObat">Beli Obat</li>
            <li id="requestObat">Request Obat</li>
            <li id="cekInventorySendiri">Cek Inventory(Sendiri)</li>
            <li id="cekInventoryLain">Cek Inventory(Toko Lain)</li>
            <li id="racikObat">Racik Obat</li>
            <li id="historyLog">History Log</li>
            <li id="sync">Sync</li>
        </ul>
    </nav>

    <section class="hidden" id="menuJualObat">
        <h1>Menu Jual Obat</h1>
    </section>
    <section class="hidden" id="menuBeliObat">
        <h1>Beli Obat</h1>
    </section>
    <section class="hidden" id="menuRequestObat">
        <h1>Request Obat</h1>
    </section>
    <section class="hidden" id="menuCekInventorySendiri">
        <h1>My Inventory</h1>
    </section>
    <section class="hidden" id="menuCekInventoryLain">
        <h1>Inventory Lain</h1>
    </section>
    <section class="hidden" id="menuRacikObat">
        <h1>Racik Obat</h1>
    </section>
    <section class="hidden" id="menuHistoryLog">
        <h1>History Log</h1>
    </section>
    <section class="hidden" id="menuSync">
        <h1>Sync</h1>
    </section>
</body>
</html>