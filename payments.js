//--------------------------------------------------------------------Variables-------------------------------------------------------------------//
let nom= document.getElementById('N');
let email= document.getElementById('exampleInputEmail1');
let B_number= document.getElementById('P');
let amount= document.getElementById('E');
let Bal_amount= document.getElementById('B');
let date= document.getElementById('D');
let exp=/^[a-zA-Z0-9]+[@][a-z]+[.][a-z]{2,3}$/



//----------------------------------------------------------------Functions-----------------------------------------------------------------------//
function pay()
{
    if(nom.value=="" || email.value=="" || B_number.value=="" || amount.value=="" || Bal_amount.value=="" || date.value=="" )
    {
        alert ("Remplir tous les champ!!!");
        return false;
    }

    if( isNaN(amount.value) )
    {
        document.getElementById('A_telephone').innerHTML="entrez les nombres seulement!";
        return false;
    }

    if (exp.test(email.value)==false)
    {  
        document.getElementById('mail').innerHTML="entrez un adresse email valide !";  
        return false;   
    }  
    if(B_number.value.toString().length!=10)
    {
        document.getElementById('telephone').innerHTML="Il faut entrez 10 numéros!!";
        return false;
    } 

}


function dec() 
{
   let confirmation= confirm ("vous voulez se déconnecter?");
   if( confirmation == true )
    {
    return true;
    } 
    else {
        return false;
        }
}