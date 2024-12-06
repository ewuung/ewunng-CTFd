FROM python:3.12-slim

WORKDIR /ilovecorn

RUN apt-get update \
    && apt-get -y --no-install-recommends install socat \ 
    && rm -rf /var/lib/apt/lists/*

COPY src/requirements.txt .
COPY src/ilovecorn.py .
COPY src/app.py .
COPY src/flag .
COPY src/static/corn.jpg .
COPY src/templates/console.html .

RUN groupadd ilovecorn \
    && useradd --no-create-home -d /ilovecorn -g ilovecorn ilovecorn \
    && chown -R ilovecorn:ilovecorn /ilovecorn/ \
    && chmod -R 755 /ilovecorn/ \
    && mv flag flag_$(cat /dev/urandom | tr -dc 'a-zA-Z0-9' | head -c 32) \
    && pip install --no-cache-dir -r requirements.txt

EXPOSE 7102
ENTRYPOINT ["python", "./ilovecorn.py"]