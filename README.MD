# Title: Doctrine

## Learning objectives
- Learn basic terminology of an ORM (Entities, relations, ...)
- Learn to create a basic crud with Doctrine
- Learn to make a REST API


## The mission:

1. Creating entities (student and teacher)



   <p align="center"> yet to be filled ... </p>

---

## Nice to have features
- Implement basic HTTP autentication with headers to restrict access
- Create a Classroom entity that has a ManyToMany relation to Teachers (several teachers can use the same room, but can also use several rooms).

### Tips
- On PHP level, you can test which type of HTTP method was used by using `$_SERVER['REQUEST_METHOD']`.
- You can json_encode($data, JSON_PRETTY_PRINT) to display JSON that has a nice layout in the browser.