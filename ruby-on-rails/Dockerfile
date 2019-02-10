FROM ruby:2.6.0-alpine

ARG UID=991
ARG GID=991

ENV RAILS_ENV production
ENV LANG C.UTF-8

WORKDIR /app

COPY Gemfile Gemfile.lock /app/

RUN set -x \
  && apk add --no-cache --update \
  libxml2-dev \
  libxslt-dev \
  libstdc++ \
  tzdata \
  nodejs \
  build-base \
  linux-headers \
  ca-certificates \
  git \
  curl-dev \
  less \
  postgresql-dev \
  libpq \
  && bundle install --path vendor/bundle --jobs=4

COPY . .

RUN set -x \
  && addgroup app -g ${GID} \
  && adduser -D -G app -u ${UID} app \
  && chown -R app:app /app /usr/local/bundle

USER app

EXPOSE 3000
