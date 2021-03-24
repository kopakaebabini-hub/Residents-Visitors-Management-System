<html>
    <head>

        <title>Open exe</title>

        <script type="text/javascript">
        function runProgram()
        {
            var shell = new ActiveXObject("WScript.Shell");                 
            var appITunes = "\"C:\\Program Files\\iTunes\\iTunes.exe\" ";
            shell.Run(appITunes);
        }        
        </script>

    </head>



    <body>

        <a href="javascript:runProgram()">Run program</a>
        <a href="C:\Program Files (x86)\SQLBackupAndFTP\SBF.Application.exe">Notepad</a>


    </body>

</html>
