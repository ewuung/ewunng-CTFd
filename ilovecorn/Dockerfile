FROM python:3.12-slim

WORKDIR /ilovecorn

RUN apt-get update \
    && apt-get -y --no-install-recommends install socat \ 
    && rm -rf /var/lib/apt/lists/*

COPY src/ilovecorn.py ./src/
COPY src/app.py ./src/
COPY src/flag ./src/
COPY src/static/corn.jpg ./src/static/
COPY src/templates/console.html ./src/templates/
COPY src/requirements.txt ./src/

RUN groupadd ilovecorn \
    && useradd --no-create-home -d /ilovecorn -g ilovecorn ilovecorn \
    && chown -R ilovecorn:ilovecorn /ilovecorn/ \
    && chmod -R 755 /ilovecorn/ \
    && pip install --no-cache-dir -r ./src/requirements.txt

EXPOSE 7101
CMD ["src/ilovecorn.py"]
ENTRYPOINT ["python3"]
