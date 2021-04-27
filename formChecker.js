document.onsubmit = function formChecker()
{
    regex = new RegExp(".*@.*\.com");
    let username = document.forms["customerForm"]["username"].value;
    let password = document.forms["customerForm"]["password"].value;
    let wraithQuant = document.forms["customerForm"]["wraithQuant"].value;
    let firebirdQuant = document.forms["customerForm"]["firebirdQuant"].value;
    let aviarQuant = document.forms["customerForm"]["aviarQuant"].value;
    let shippingSelection = document.forms["customerForm"]["shipping"].value;

    if(regex.test(username) == false)
    {
        alert("Invalid email address!");
        return false;
    }
    if(password == "")
    {
        alert("Password is blank!");
        return false;
    }
    if(wraithQuant < 0 || wraithQuant == "")
    {
        alert("Quantity incorrect!");
        return false;
    }
    if(firebirdQuant < 0 || firebirdQuant == "")
    {
        alert("Quantity incorrect!");
        return false;
    }
    if(aviarQuant < 0 || aviarQuant == "")
    {
        alert("Quantity incorrect!");
        return false;
    }
    if(shippingSelection == "")
    {
        alert("Must select a shipping option!");
        return false;
    }


}