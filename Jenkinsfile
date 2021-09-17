pipeline {
    agent any

    stages {
        stage("init") {
            steps {
                  sh "git init"
             }
        }
        
        stage("config") {
            steps {
                  sh "git config --global init.defaultBranch master"
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
                  sh "git push -u origin master"
             }
        }
    }
}   
