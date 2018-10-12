// generate random 32 bit hash
function makeid() {
    var text = "";
    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
  
    for (var i = 0; i < 31; i++)
      text += possible.charAt(Math.floor(Math.random() * possible.length));
  
    return text;
}