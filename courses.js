//--------------------------------------------------------------------Variables-------------------------------------------------------------------//
let course= document.getElementById('N');
let subject= document.getElementById('exampleInputEmail1');
let author= document.getElementById('P');
let duration= document.getElementById('E');
let exp=/^[a-zA-Z ]{4,10}$/;

//----------------------------------------------------------------Functions-----------------------------------------------------------------------//
function valeur()
{
    if(course.value=="" || subject.value=="" || author.value=="" || duration.value=="" )
    {
        alert ("Remplir tous les champ!!!");
        return false;
    }

    if( exp.test(course.value)==false )
    {
        document.getElementById('cours').innerHTML="il faut pas contenir des nombres (min:4 caractéres , max:10 caractéres)";
        return false;
    }
}

function suppr() 
{
   let confirmation= confirm("est-ce que vous voulez vraiment supprimer ce cours!!");
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