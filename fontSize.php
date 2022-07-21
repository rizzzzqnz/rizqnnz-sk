<html>
<head>
    <title>Tukar Saiz Font</title>
    <style>
        div{
            width: 60%;
            height: 150px;
            background: #b32b73;
            color: #fff;
            text-align: center;
            line-height: 45px;
            border-radius: 10px;

            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
        }
    </style>
    <script>
        var size;
        function incfont() {
            var t=document.getElementById('fontsize').value;
            var x = document.getElementById('text');
            x.style.fontSize =t+"px";
            size = t;
            document.getElementById("size").innerHTML = size;
        }
    </script>
</head>
<body>
    <div>
        <span>0 &nbsp;</span>
        <span><input type="range" onmousemove="incfont();" id="fontsize"
               min="0" max="60" value="20" style="width: 80%" /></span>
        <span>&nbsp; 60</span>
        <label style="display: block;">Font Size: <span id="size">20</span></label>
        <span id="text">ANDA HEBAT!!!</span>
    </div>
</body>
</html>