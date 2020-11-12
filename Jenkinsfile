env.DOCKER_REGISTRY = 'indradock'
env.DOCKER_IMAGE_NAME = 'blog-app'
pipeline {
    agent any
    stages {
        stage('docker build image') {
            steps {
                sh "docker build --build-arg APP_NAME=$DOCKER_IMAGE_NAME -t $DOCKER_REGISTRY/$DOCKER_IMAGE_NAME:$BUILD_NUMBER ."
                }
           }
        stage('docker push image') {
            steps {                
                sh "docker push $DOCKER_REGISTRY/$DOCKER_IMAGE_NAME:$BUILD_NUMBER"
                }
           }
        stage('versi image') {
            steps {
                sh('sed -i "s/versi/$BUILD_NUMBER/g" blog.yml')
                }
           }
        stage('change namespace') {
            steps {
                sh('sed -i "s/default/staging/g" blog.yml')
                }
           }
        stage('set domain') {
            steps {
                sh('sed -i "s/blog.indraku.online/blogstaging.indraku.online/g" blog.yml')
                }
           }
        stage('deploy ke kubernetes') {
            steps {
                sh('kubectl apply -f blog.yml')
                }
           }
        stage('remove image docker') {
            steps {
                sh "docker rmi $DOCKER_REGISTRY/$DOCKER_IMAGE_NAME:$BUILD_NUMBER"
                }
           }
         stage('show ingress') {
            steps {
                sh('kubectl get ingress -n=staging')
                }
           }        
      }
}
