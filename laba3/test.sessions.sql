select animals.id, animals.name, animaltype.type, animals.age
from animals INNER join animaltype
on animaltype.name = animals.name
where animals.age > 2;