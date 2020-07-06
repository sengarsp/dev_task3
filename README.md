Perform second task on top of Kubernetes where we use Kubernetes resources like Pods, ReplicaSet, Deployment, PVC and Service.

Create container image that’s has Jenkins installed using dockerfile Or You can use the Jenkins Server on RHEL 8/7

When we launch this image, it should automatically starts Jenkins service in the container.

Create a job chain of job1, job2, job3 and job4 using build pipeline plugin in Jenkins

Job1 : Pull the Github repo automatically when some developers push repo to Github.

Job2 :
      A)By looking at the code or program file, Jenkins should automatically start the respective language interpreter installed image container to              deploy code on top of Kubernetes ( eg. If code is of PHP, then Jenkins should start the container that has PHP already installed ).
      B) Expose your pod so that testing team could perform the testing on the pod
      C) Make the data to remain persistent ( If server collects some data like logs, other user information )

Job3 : Test your app if it is working or not.

Job4 : if app is not working , then send email to developer with error messages and redeploy the application after code is being edited by the developer
# Solution :-
 # initial steps:
   i) Create the repository from where developer will push the code.
   ii) Configure the hooks so that whenever the developer commit the code it will automaically puch the code to github.
notes: all the images are in above 
# Step 1:
   Create container image that’s has Jenkins installed using dockerfile Or You can use the Jenkins Server on RHEL 8/7:
   I have used the Jenkins Server on RHEL 8.
# Step 2: Automatically starts the jenkins services:
  As using the RHEL 8 so, it start the jenkins server on port no 8080.
# Step 3: 
  Creating the job chain using build pipeline:
# Step 4:
   # JOB 1: 
   i have created a job for Pulling the repo.
# Step 5:
   # JOB 2:
   i) By looking at the code or program file, Jenkins should automatically start the respective language interpreter installed image container to         deploy code on top of Kubernetes ( eg. If code is of PHP, then Jenkins should start the container that has PHP already installed ).
   ii) Expose your pod so that testing team could perform the testing on the pod
   iii) Make the data to remain persistent ( If server collects some data like logs, other user information ).
 # Step 6 & 7:
   # Job3 : 
   i) Test your app if it is working or not. If app is not working , then send email to developer with error messages and redeploy the application    after code is being edited by the developer
   ii) For PHP ( Testing and sending mail ).
# Build with 
 1) RHEL-8 Running in Virtual Box
 2) Kubernetes installed by minikube and also running in RHEL 8
 3) Git & GitHub
 4) Jenkins
# Author
 Shyamendra Sengar

