pipeline {
    agent any

    stages {
       
        stage("config") {
            steps {
                  sh "git config --global init.defaultBranch production"
             }
        }
        
        stage("rm") {
            steps {
                  sh "git rm test.index"
             }
        }
        
         stage("add") {
            steps {
                  sh "git add ."
             }
        }
        
         stage("commit") {
            steps {
                  sh "git commit -m 'Delete test.index file'"
             }
        }
        
          stage("push") {
            steps {
                  sh "git push -u origin production"
             }
        }
    }
}   
