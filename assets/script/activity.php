<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Javascript activity</title>
    </head>
    <body>
        <h1>JS demo</h1>
        <p id="demo">This is a Javascript demo</p>

        <!-- <script>
            console.console.log();
        </script> -->

        <!-- <script>
            function myFunction(){
            document.getElementById("demo").innerHTML = "New Paragraph";
            }
        </script>  -->

        <!-- Linking external JS file -->
        <!-- <script src="meinScript.js"></script> -->

        <!-- onclick is a JS event. Initiates myFunction() -->
        <!-- <button type="button" onclick="myFunction()">Try it</button>  -->

        <!-- This one will override the html portion and just display 11 once button clicked-->
        <!-- <button type="button" onclick="document.write(5+6)">Try it</button>  -->
        
        <!-- A function to convert temp from fahrenheit to celsius. -->
        <!-- <script>
            function toCelsius(fahrenheit){
                return (5/9) * (fahrenheit-32);
            }
            document.getElementById("demo").innerHTML = toCelsius(77) +" degrees celsius";
        </script> -->

        <!-- Java objects -->
        <!-- <script>
            let vehicle = {name: 'BMW', type: 'M5', year: '2020'};

            document.getElementById("demo").innerHTML= vehicle.type;
        </script> -->
        <script>
            const person ={ name:['Bob', 'Smith'], age: 32, gender: M, hobbies:['music', 'travel'], 
                bio: function(){
                    alert(this.name[0]+ ' '+ this.name[1]+ ' is ' +this.age+'years old. He likes 'this.hobbies[0]+ ' and 'this.hobbies[1])
                }
                greeting:function(){
                    alert('Hi, mein vorname ist '+this.name[0]'.')
                }
            };
            document.getElementById("dreg").innerHTML= person.greeting; 
        </script>
       
    </body>
</html>
