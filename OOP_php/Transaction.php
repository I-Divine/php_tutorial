<?php
class Transaction{
    //  private float $amount ;
    //  private string $description ;
    
    // public declaration
     //  public float $amount ;
    //  public string $description ;

    //  this is a constructor
    // it executes on function initialization
    
    // public function __construct(float $amount, string $description) {
    //     $this->amount = $amount;
    //     $this->description = $description;
    //  }

    public function __construct( 
        private float $amount,
        private string $description
        ) 
    {  
    }

     function get_amount() :  float {
        return $this->amount;
     }

     function get_description (){
        return $this->description;
     }

     function __destruct(){
        echo $this->description . " has been destroyed";
     }

}
?>