FROM python:3.12-slim

WORKDIR /blackandwhite

RUN apt-get update \
    && apt-get -y --no-install-recommends install socat \ 
    && rm -rf /var/lib/apt/lists/*

COPY src/app.py ./src/
COPY src/flag_1 ./src/
COPY src/flag_2 ./src/
COPY src/static/blackhat.jpg ./src/static/
COPY src/static/whitehat.jpg ./src/static/
COPY src/templates/blackhat.html ./src/templates/
COPY src/templates/whitehat.html ./src/templates/
COPY src/templates/index.html ./src/templates/
COPY src/requirements.txt ./src/

RUN groupadd blackandwhite \
    && useradd --no-create-home -d /blackandwhite -g blackandwhite blackandwhite \
    && chown -R blackandwhite:blackandwhite /blackandwhite/ \
    && chmod -R 755 /blackandwhite/ \
    && pip install --no-cache-dir -r ./src/requirements.txt

EXPOSE 7102
CMD ["src/app.py"]
ENTRYPOINT ["python"]