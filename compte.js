
//--------------------------------------------------------------------Variables-------------------------------------------------------------------//
let email= document.getElementById('email');
let nom= document.getElementById('name');
let password= document.getElementById('pwd');
let exp=/^[a-zA-Z0-9]+[@][a-z]+[.][a-z]{2,3}$/


//--------------------------------------------------------Functions-----------------------------------------------------------------------//
function valeur()
{
   if(email.value=="" || nom.value=="" || password.value=="" )
    {
        alert("remplir tout les champ!!");
        return false;
    }

         
        if (exp.test(email.value)==false)
        {  
            alert("Please enter a valid e-mail address ");  
            return false;  
        }  

        if(password.value.length<6)
        {
            document.getElementById('pass').innerHTML="entrez un mot de passe qui contient 6 caractéres ou plus !";  
                return false; 
        }
}


  

