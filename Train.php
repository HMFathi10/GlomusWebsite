<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript">
    var emp1 = {};
    emp1.id = 1;
    emp1.name = 'Tee';
    console.log(emp1);
    $.ajax({
        url: "CashTemp.php",
        method: "POST",
        data: emp1,
        success: function (res) {
            console.log(res);
        }
    })
</script>