;((c,d)=>{
    const checkbox=d.getElementById('checkbox')

    const password=d.getElementById('password-trainer')
    checkbox.addEventListener('click',(evento)=>{
         if(checkbox.checked===true){
            if(password.type=='password'){
                password.type='text'
            }
           
         }else{
             password.type='password'
         }

       

    });
  
  

})(console.log,document);