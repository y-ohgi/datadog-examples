FROM node:10-alpine

WORKDIR /app

COPY package.json package-lock.json /app/

RUN apk add --no-cache --update \
    ca-certificates \
  && npm install --no-progress --production

COPY . .

RUN chown -R node:node /app

USER node

ENV PORT=3000
ENV NODE_ENV=production

EXPOSE $PORT

CMD ["npm", "start"]

