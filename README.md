Q: Which infrastructure resources you would need to run the utility daily in an automated fashion?
A: Server or Cloud Instance; Web Server, Task Scheduler


Q: How would you deploy your code to the infrastructure?
A: I usually use git.


Q: How would you automate your deployments so that each push to your default branch will trigger a deployment to your production environment?
A: I would use a CI/CD pipeline. 


Q: Is it possible to get the data about past crosswords? If yes, how would you build a solution to get all the historical crosswords data?
A: I allready did. If you pass the "date" parameter to the url it will filter requests based on the date entered. If you pass an empty date it will show all the answers, regardless of the date.


## Disclaimer:
I usually use Laravel for almost all my projects. The example built here does not take into account any security measure or validation of the entered data.
