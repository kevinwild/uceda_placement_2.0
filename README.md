### Rule jSon structure
- question_name = Unique Identifier 
- question_type = A set of types that have validation built around them example (only string built currently) 
- required = Must be filled out in order for quiz to be considered valid (not implemented yet)
- answers = An array of valid answers for given question, comparison depends on question type
- section_name = a way to group questions
- part = A number that represents a group, must have x evaluated result to proceceed to the next part
