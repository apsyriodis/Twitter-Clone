pipeline {
    agent any

    stages {
        stage("rm") {
            steps {
                  sh "git rm test.index"
             }
        }
        
         stage("commit") {
            steps {
                  sh "git commit -m 'Deleted test.index file'"
             }
        }
        
          stage("push") {
            steps {
                  sh "git push -u origin production"
             }
        }
    }
}   
