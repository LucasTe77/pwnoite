
<?php 
    // Comentarios em PHP - Linha

    //echo "Hey bro, Meu nome é Lusca";
    $idade = 21;
    $nome = "Lusca";
    $Altura = 1.72;
    $solteiro = true;

    //$solteiro =1;
    //scho $solteiro;
    //echo 10 < 12;
   /* CONST IDADE = 10;
    echo IDADE;
         if(10 > 12)
        {
            echo "Mentira";
        }
         else 
        {
            echo "10 não é maior que 12";
        */    

     /*   $nota1 = 6;
        if($nota1 >= 6)
        {
            echo "Aprovado";
        } else if($nota1 < 6 && $nota1 >= 2)
        {
            echo "Ainda tem chance";
        } */
// Faça um if que caucule a media e escreva na tela 
// se foi aprovado ou não

        // $nota1 = 8;
        // $nota2 = 10;
        // $media = $nota1+$nota2;
        // $media = $media/2;
         //$media /= 2;
         //$soma += 10;
         //$mult *= 3;
         //$sub -= 5;

        // if($media >= 6){
         //    echo "Aprovado";
        // } else {
           //  echo "Reprovado";
        // }

         // > Maior 
         // < Menor
         // <= Menor igual que
         // >= Maior igual que
         // == Mesmo Valor
         // === Mesmo tipo e mesmo valor

         // && AND
         // !! OR
         // Negação

         //if(!10>12){} ! inverte o resultado do teste logico

         // % Resto da divisão

         // <br> pula linha

         //$nome = "teste";
        // echo "<br> <br> Fer" . $nome . " nando "."<br";

         //Loop em PHP abaixo:
         $contadora = 0;
         do{
             // código a ser repetido
             $contadora ++; //" ++ é a varival +1
         }while($contadora < 10);

         $cont = 0;
         while($cont < 10){
             //executa os codigos
             $cont++;
         }

         for($i = 0; $i < 10; $i++)
         {
             //Executa os codigos
             if($i % 2 == 0){
                 echo "<p> ".$i. " é par</p>";
             } else {
                 echo "<p>".$i. " é impar";
             }
         }

?>