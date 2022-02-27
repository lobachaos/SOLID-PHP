# SOLID - PHP
### Objetivo :
Implementar o padrão de arquitetura **SOLID** no código fornecido nas aulas do curso da Alura.


**Task List** ( Problemas já descobertos ) :
- [x] Em Model -> Curso , o curso está implementando regras  de validação para o feedback , independente do feedback ser positivo ou negativo o curso será válido , então para isso deve ser criado um próprio Model para o Feedback.
- [ ] Em Service -> CalculadorPontução : Possui muitos blocos if/else isso pode crescer inifinitamente , com qualquer adição de um Conteúdo novo , será necessário a implementação de um novo bloco else/if.
Para corrigir isso : Criar uma interface com um método para recuperar a pontuação , assim quando qualquer Conteúdo novo for inserido , basta criar a regra de pontuação para ele !
- [ ] Em Model -> AluraMais : o metódo recuperaURL está infrigindo as regras da classe Mãe (Video) , enquanto a classe Mãe devolve uma URL a classe filha está retornando somente uma string com a URI.
- [ ] Em Service -> Assitidor : Possui dois metodos assistir para classes que herdam de uma mesma classe Mãe (Video)