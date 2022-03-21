//--------------------------------------------------------------------Variables-------------------------------------------------------------------//
let nom= document.getElementById('N');
let email= document.getElementById('exampleInputEmail1');
let phone= document.getElementById('P');
let E_number= document.getElementById('E');
let date= document.getElementById('D');
let exp=/^[a-zA-Z0-9]+[@][a-z]+[.][a-z]{2,3}$/
let expNom=/^[a-zA-Z ]{5,20}$/;

//----------------------------------------------------------------Functions-----------------------------------------------------------------------//
function std()
{
    if(nom.value=="" || email.value=="" || phone.value=="" || E_number.value=="" || date.value=="" )
    {
        alert ("Remplir tous les champ!!!")
        return false;
    }

    if( isNaN(phone.value) )
    {
        document.getElementById('telephone').innerHTML="entrez les nombres seulement!";
        return false;
    }
    
    if(phone.value.toString().length!=10)
    {
        document.getElementById('telephone').innerHTML="Il faut entrez 10 numéros!!";
        return false;
    } 

        
    if (exp.test(email.value)==false)
    {  
        document.getElementById('mail').innerHTML="entrez un adresse email valide !";  
        return false;  
    }  

    if( isNaN(E_number.value) )
    {
        document.getElementById('E_telephone').innerHTML="entrez les nombres seulement!";
        return false;
    }

    if (expNom.test(nom.value)==false)
    {  
        document.getElementById('nom').innerHTML="entrez votre nom complet avec un nom et prenom!";  
        return false;  
    }  

    
   
}

function del() 
{
   let confirmation= confirm("est-ce que vous voulez vraiment supprimer ces informations!!");
        if( confirmation == true )
            {
            return true;
            } 

            else {
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
