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
            resetPositionActiveLine()
        }

        function resetPositionActiveLine(){
            $("#activeLine").removeClass("line-1");
            $("#activeLine").removeClass("line-2");
            $("#activeLine").removeClass("line-3");
            $("#activeLine").removeClass("line-4");
            $("#activeLine").removeClass("line-5");
            $("#activeLine").removeClass("line-6");
            $("#activeLine").removeClass("line-7");
            $("#activeLine").removeClass("line-8");
            $("#activeLine").removeClass("line-9");
            $("#activeLine").removeClass("hidden");
        }

        $("#jualObat").click(function(){
            addHidden()
            $("#menuJualObat").toggleClass("hidden");
            $("#activeLine").addClass("line-1");
        })

        $("#beliObat").click(function(){
            addHidden()
            $("#menuBeliObat").toggleClass("hidden");
            $("#activeLine").addClass("line-2");
        })

        $("#requestObat").click(function(){
            addHidden()
            $("#menuRequestObat").toggleClass("hidden");
            $("#activeLine").addClass("line-3");
        })

        $("#cekInventorySendiri").click(function(){
            addHidden()
            $("#menuCekInventorySendiri").toggleClass("hidden");
            $("#activeLine").addClass("line-4");
        })
        
        $("#cekInventoryLain").click(function(){
            addHidden()
            $("#menuCekInventoryLain").toggleClass("hidden");
            $("#activeLine").addClass("line-5");
        })
        
        $("#racikObat").click(function(){
            addHidden()
            $("#menuRacikObat").toggleClass("hidden");
            $("#activeLine").addClass("line-6");
        })
        
        $("#historyLog").click(function(){
            addHidden()
            $("#menuHistoryLog").toggleClass("hidden");
            $("#activeLine").addClass("line-7");
        })
        
        $("#sync").click(function(){
            addHidden()
            $("#menuSync").toggleClass("hidden");
            $("#activeLine").addClass("line-8");
        })
    });

    

</script>
<body>
    <nav>
        <h1>Menu Apotek</h1>   
        <div class="line"></div>     
        <div id="activeLine" class="a-line hidden"></div>
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
        <div>
            <h1>History Log</h1>
            <table border="1px black">
                <thead>
                    <tr>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>isi tanggal</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    <section class="hidden" id="menuSync">
        <h1>Sync</h1>
    </section>
</body>
</html>