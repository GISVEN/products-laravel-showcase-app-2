set windows-powershell := true

export DOCKER_BUILDKIT := '1'

PROJECT := "laravel-showcase-app"

run: run-db run-app

run-app:
  composer run dev

run-db:
  docker-compose -p {{ PROJECT }} -f docker/docker-compose.yml up -d

down:
  docker-compose -p {{ PROJECT }} -f docker/docker-compose.yml down

setup:
  composer run setup
