<!DOCTYPE html>
<html lang="en">
<head>
    <title>Calculator - JSalán</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <center>
        <div>
            <table>
                <tr>
                    <td colspan="4">
                        <center>
                            <h3>Calculator</h3>
                        </center>
                    </td>
                </tr>
            
                <tr>
                    <td colspan="4">
                        <form name="form">
                            <input disabled type="text" class="textBox" value="0">
                        </form>
                    </td>
                </tr>
            
            
                <tr>
                    <td>
                        <input type="button" value="%" id="%_">
                    </td>
                    <td>
                        <input type="button" value="√" id="root_">
                    </td>
                    <td>
                        <input type="button" value="x²" id="pow_">
                    </td>
                    <td>
                        <input type="button" value="1/x" id="fraction">
                    </td>
                </tr>
            
                <tr>
                    <td>
                        <input type="button" value="CE" id="ce" onclick="clearEntry()" class="yellow">
                    </td>
                    <td>
                        <input type="button" value="C  " id="c" onclick="clearInput()" class="yellow">
                    </td>
                    <td>
                        <input type="button" value="DEL" id="delete" onclick="deleteCharacter()" class="yellow">
                    </td>
                    <td>
                        <input type="button" value="/" id="div" onclick="insertCharacter('/')" class="brown">
                    </td>
                </tr>
            
                <tr>
                    <td>
                        <input type="button" value="7" id="7" onclick="insertCharacter(7)">
                    </td>
                    <td>
                        <input type="button" value="8" id="8" onclick="insertCharacter(8)">
                    </td>
                    <td>
                        <input type="button" value="9" id="9" onclick="insertCharacter(9)">
                    </td>
                    <td>
                        <input type="button" value="x" id="times" onclick="insertCharacter('*')" class="brown">
                    </td>
                </tr>
            
                <tr>
                    <td>
                        <input type="button" value="4" id="4" onclick="insertCharacter(4)">
                    </td>
                    <td>
                        <input type="button" value="5" id="5" onclick="insertCharacter(5)">
                    </td>
                    <td>
                        <input type="button" value="6" id="6" onclick="insertCharacter(6)">
                    </td>
                    <td>
                        <input type="button" value="-" id="minus" class="brown" onclick="insertCharacter('-')">
                    </td>
                </tr>
            
                <tr>
                    <td>
                        <input type="button" value="1" id="1" onclick="insertCharacter(1)">
                    </td>
                    <td>
                        <input type="button" value="2" id="2" onclick="insertCharacter(2)">
                    </td>
                    <td>
                        <input type="button" value="3" id="3" onclick="insertCharacter(3)">
                    </td>
                    <td>
                        <input type="button" value="+" id="add" class="brown" onclick="insertCharacter('+')">
                    </td>
                </tr>
            
                <tr>
                    <td>
                        <input type="button" value="+/-" id="addMinus" class="yellow">
                    </td>
                    <td>
                        <input type="button" value="0" id="0" onclick="insertCharacter(0)">
                    </td>
                    <td>
                        <input type="button" value="." id="point" class="yellow" onclick="insertCharacter('.')">
                    </td>
                    <td>
                        <input type="button" value="=" id="equals" class="brown" onclick="result()">
                    </td>
                </tr>
            </table>
        </div>
    </center>
    <script type="text/javascript" src="operations.js"></script>
</body>
</html>