pipeline {
    agent any

    stages {
        stage("rm") {
            steps {
                  sh 'git rm .env.example'
             }
        }
        
         stage("commit") {
            steps {
                  sh 'git commit -m "Deleted .env.example file'
             }
        }
        
          stage("push") {
            steps {
                  sh 'git push'
             }
        }
    }
}   
