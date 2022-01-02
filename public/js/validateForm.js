function validateForm()
{
    if( document.accounts.username.value == "" ) {
        alert( "Please provide your name!" );
        document.accounts.username.focus() ;
        return false;
     }
     if( document.accounts.password.value == "" ) {
        alert( "Please provide your Email!" );
        document.accounts.password.focus() ;
        return false;
     }
     
     if( document.accounts.remember.checked.value == false ) {
        alert( "Please tick checked!" );
        return false;
     }
     return( true );
}