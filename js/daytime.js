        document.write("");
        var day = new Date();
        var hr = day.getHours();
        if (hr >= 0 && hr < 12) {
            document.write("Guten Morgen");
        } else if (hr == 12) {
            document.write("Guten Tag");
        } else if (hr >= 12 && hr <= 17) {
            document.write("Guten Nachmittag");
        } else {
            document.write("Guten Abend");
        }
        document.write("");