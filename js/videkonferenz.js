
        function suchen(){
                        var s =document.getElementById("suche").value;
                        window.location = "https://videokonferenzen.educationmanager-online.de/edu/?" + s;}
        function Event_Key()
        {
            if(event.keyCode == 13)
                {
                    suchen();
                }
        }
       