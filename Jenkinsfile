pipeline {
    agent any

    stages {
        stage("test") {
            steps {
                  sh 'git rm .env.example'
                  sh 'git commit -m "Deleted .env.example file'
                  sh 'git push'
             }
        }
    }
}   
